<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
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
        $berita = Berita::latest();

        if (request('search')) {
            $berita->where('judul', 'like', '%' . request('search') . '%')
                ->orWhere('penulis', 'like', '%' . request('search') . '%');
        }

        return view('admin.berita.index', ["berita" => $berita->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
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
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required',
            'status' => 'required',
            'penulis' => 'required'
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
            'judul' => $request->judul,
            'slug' => SlugService::createSlug(Berita::class, 'slug', $request->judul),
            'category_id' => 1,
            'excerpt' => 'saddsadasdsa',
            'isi' => $request->isi,
            'gambar' => $txt,
            'status' => $request->status,
            'penulis' => $request->penulis
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
