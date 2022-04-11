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
        $berita = Berita::latest()->paginate(5);

        if (request('search')) {
            $berita->where('judul', 'like', '%' . request('search') . '%')
                ->orWhere('penulis', 'like', '%' . request('search') . '%');
        }

        return view('admin.berita.index', ["berita" => $berita]);
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
            'kategori_id' => 'required',
            'judul' => 'required|string|max:255|min:5',
            'isi' => 'required|max:255',
            'penulis' => 'required|min:3',
            'gambar' => 'required',
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
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.edit', compact('berita'));
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
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->penulis = $request->penulis;
            $berita->status = $request->status;
        } else {
        }

        $berita->save();
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
