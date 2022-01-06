<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengabdian;

class PengabdianController extends Controller
{
    public function index() {
        $pengabdian = Pengabdian::all();
        return view('admin.pengabdian.index', compact('pengabdian'));
    }

    public function create() {
        return view('admin.pengabdian.create');
    }

    public function store(Request $request) {
    
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required',
        ]);

        $upload = $request->gambar;
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/pengabdian/". $file_name;
            $request->gambar->storeAs('public/pengabdian', $file_name);
        } else {
            $file_name = null;
        }

        Pengabdian::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $txt,
        ]);
        return redirect()->route('pengabdian.index')
            ->with('success', 'Pengabdian Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $pengabdian = Pengabdian::find($id);

        return view('admin.pengabdian.edit', compact('pengabdian'));
    }

    public function update(Request $request, $id)
    {
        $pengabdian = Pengabdian::findOrFail($id);
        if (isset($request->gambar)){
            $extention = $request->gambar->extension();
            $file_name = time().'.'.$extention;
            $txt = "storage/pengabdian/". $file_name;
            $request->gambar->storeAs('public/pengabdian', $file_name);
            $pengabdian->gambar = $txt;
            $pengabdian->judul = $request->judul;
            $pengabdian->isi = $request->isi;
        }else{}

        $pengabdian->save();
        return redirect()->route('pengabdian.index')
        ->with('edit', 'Pengabdian Berhasil Diedit');
    }

    public function destroy($id)
    {
        Pengabdian::where('id', $id)->delete();
        return redirect()->route('pengabdian.index')
        ->with('delete', 'Pengabdian Berhasil Dihapus');
    }

    public function view() 
    {
        $pengabdian = Pengabdian::all();
        return view('landingpage.pengabdian');
    }
}
