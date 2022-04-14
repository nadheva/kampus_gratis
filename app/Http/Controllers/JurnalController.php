<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index()
    {
        $jurnal = jurnal::paginate(5);
        //$jurnal = Jurnal::all();
        return view('admin.jurnal.index', compact('jurnal'));
    }

    public function create()
    {
        return view('admin.jurnal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'abstrak' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'gambar' => 'required',
            'file' => 'required',
        ]);

        $upload = $request->gambar;
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/jurnal/gambar/" . $file_name;
            $request->gambar->storeAs('public/jurnal/gambar/', $file_name);
        } else {
            $file_name = null;
        }

        if (isset($request->file)) {
            $extention = $request->file->extension();
            $file_name1 = time() . '.' . $extention;
            $txt1 = "storage/jurnal/file/" . $file_name1;
            $request->file->storeAs('public/jurnal/file/', $file_name1);
        } else {
            $file_name1 = null;
        }

        Jurnal::create([
            'judul' => $request->judul,
            'abstrak' => $request->abstrak,
            'isi' => $request->isi,
            'penulis' => $request->penulis,
            'file' => $txt1,
            'gambar' => $txt,
        ]);
        return redirect()->route('data-jurnal.index')
            ->with('success', 'jurnal Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $jurnal = Jurnal::find($id);

        return view('admin.jurnal.edit', compact('jurnal'));
    }

    public function update(Request $request, $id)
    {


        $jurnal = Jurnal::findOrFail($id);
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/jurnal/gambar/" . $file_name;
            $request->gambar->storeAs('public/jurnal/gambar/', $file_name);
            $jurnal->gambar = $txt;
        } else {
        }

        if (isset($request->file)) {
            $extention = $request->file->extension();
            $file_name = time() . '.' . $extention;
            $txt1 = "storage/jurnal/file/" . $file_name;
            $request->file->storeAs('public/jurnal/file/', $file_name);
            $jurnal->file = $txt1;
        } else {
        }

        $jurnal->abstrak = $request->abstrak;
        $jurnal->judul = $request->judul;
        $jurnal->isi = $request->isi;
        $jurnal->penulis = $request->penulis;
        $jurnal->save();
        return redirect()->route('data-jurnal.index')
            ->with('edit', 'jurnal Berhasil Diedit');
    }

    public function destroy($id)
    {
        Jurnal::where('id', $id)->delete();
        return redirect()->route('data-jurnal.index')
            ->with('delete', 'jurnal Berhasil Dihapus');
    }
}
