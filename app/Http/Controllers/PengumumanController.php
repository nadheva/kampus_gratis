<?php

namespace App\Http\Controllers;
use App\Models\Pengumuman;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index() {
        $pengumuman = Pengumuman::all();
        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    public function create() {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request) {
    
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            // 'file' => 'required',
        ]);

        $upload = $request->file;
        if (isset($request->file)) {
            $extention = $request->file->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/pengumuman/". $file_name;
            $request->file->storeAs('public/pengumuman', $file_name);
        } else {
            $file_name = null;
        }

        Pengumuman::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'file' => $txt,
        ]);
        return redirect()->route('pengumuman.index')
            ->with('success', 'Pengumuman Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::find($id);

        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        if (isset($request->file)){
            $extention = $request->file->extension();
            $file_name = time().'.'.$extention;
            $txt = "storage/pengumuman/". $file_name;
            $request->file->storeAs('public/pengumuman', $file_name);
            $pengumuman->file = $txt;
            $pengumuman->judul = $request->judul;
            $pengumuman->isi = $request->isi;
        }else{}

        $pengumuman->save();
        return redirect()->route('pengumuman.index')
        ->with('edit', 'Pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        Pengumuman::where('id', $id)->delete();
        return redirect()->route('pengumuman.index')
        ->with('delete', 'Pengumuman Berhasil Dihapus');
    }
}
