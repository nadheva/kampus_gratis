<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('admin.prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prestasi.create');
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
            'tahun' => 'required',
            'gambar' => 'required',
            'jenis' => 'required',
            'status' => 'required',
            'tahun' => 'required',
            'penulis' => 'required'
        ]);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/prestasi/". $file_name;
            $request->gambar->storeAs('public/prestasi', $file_name);
        } else {
            $file_name = null;
        }

        Prestasi::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tahun' => $request->tahun,            
            'gambar' => $txt,
            'jenis' => $request->jenis,
            'tahun' => $request->tahun,
            'status' => $request->status,
            'penulis' => $request->penulis
        ]);

        return redirect()->route('data-prestasi.index')
            ->with('success', 'Prestasi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = Prestasi::find($id);
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);
        if (isset($request->gambar)){
            $extention = $request->gambar->extension();
            $file_name = time().'.'.$extention;
            $txt = "storage/prestasi/". $file_name;
            $request->gambar->storeAs('public/prestasi', $file_name);
            $prestasi->gambar = $txt;
            $prestasi->judul = $request->judul;
            $prestasi->isi = $request->isi;
            $prestasi->tahun = $request->tahun;
            $prestasi->penulis = $request->penulis;
            $prestasi->jenis = $request->jenis;
            $prestasi->tahun = $request->tahun;
            $prestasi->status = $request->status;
        }else{}

        $prestasi->save();
        return redirect()->route('data-prestasi.index')
        ->with('edit', 'Agenda Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prestasi::where('id', $id)->delete();
        return redirect()->route('data-prestasi.index')
        ->with('delete', 'Data penelitian Berhasil Dihapus');
    }
}
