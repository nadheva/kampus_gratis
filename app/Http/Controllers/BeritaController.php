<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Google\Cloud\Core\Retry;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.berita.index', [
            'berita' => Berita::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create', [
            'categories' => KategoriBerita::all()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required|string|max:255|min:5',
            'isi' => 'required|min:20',
            'penulis' => 'required|min:3',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori_id' => 'required',
            'status' => 'required',
        ]);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/berita/" . $file_name;
            $request->gambar->storeAs('public/berita', $file_name);
        } else {
            $file_name = null;
        }

        Berita::create([
            'category_id' => $request->kategori_id,
            'slug' => SlugService::createSlug(Berita::class, 'slug', $request->judul),
            'judul' => $request->judul,
            'isi' => $request->isi,
            'status' => $request->status,
            'penulis' => $request->penulis,
            'gambar' => $txt,
        ]);

        return redirect()->route('data-berita.index')
            ->with('success', 'Berita Berhasil Diunggah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        $categories = KategoriBerita::all();
        return view('admin.berita.edit', compact('berita', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/berita/" . $file_name;
            $request->gambar->storeAs('public/berita', $file_name);
            $berita->gambar = $txt;
            $berita->category_id = $request->kategori_id;
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->penulis = $request->penulis;
            $berita->status = $request->status;
        } else {
        }

        dd($berita);

        $berita->update();
        return redirect()->route('data-berita.index')
            ->with('edit', 'Berita Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::where('id', $id)->delete();
        return redirect()->route('data-berita.index')
            ->with('delete', 'Berita Berhasil Dihapus');
    }
}
