<?php

namespace App\Http\Controllers;
use App\Models\GuruBesar;
use Illuminate\Http\Request;

class GuruBesarController extends Controller
{
    public function index() {
        $gurubesar = GuruBesar::all();
        return view('admin.guru-besar.index', compact('gurubesar'));
    }

    public function create() {
        return view('admin.guru-besar.create');
    }

    public function store(Request $request) {
    
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
            'lulusan' => 'required',
            'pekerjaan' => 'required'
        ]);

        $upload = $request->foto;
        if (isset($request->foto)) {
            $extention = $request->foto->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/gurubesar/". $file_name;
            $request->foto->storeAs('public/gurubesar', $file_name);
        } else {
            $file_name = null;
        }

        GuruBesar::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $txt,
            'lulusan' => $request->lulusan,
            'pekerjaan' => $request->pekerjaan
        ]);
        return redirect('guru-besar')
            ->with('success', 'Guru Besar Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $gurubesar = GuruBesar::find($id);

        return view('admin.guru-besar.edit', compact('gurubesar'));
    }

    public function update(Request $request, $id)
    {
        $gurubesar = GuruBesar::findOrFail($id);
        if (isset($request->foto)){
            $extention = $request->foto->extension();
            $file_name = time().'.'.$extention;
            $txt = "storage/gurubesar/". $file_name;
            $request->foto->storeAs('public/gurubesar', $file_name);
            $gurubesar->foto = $txt;
            $gurubesar->deskripsi = $request->deskripsi;
            $gurubesar->nama = $request->nama;
            $gurubesar->pekerjaan = $request->pekerjaan;
            $gurubesar->lulusan = $request->lulusan;
        }else{}

        $gurubesar->save();
        return redirect('guru-besar')
        ->with('edit', 'Guru Besar Berhasil Diedit');
    }

    public function destroy($id)
    {
        GuruBesar::where('id', $id)->delete();
        return redirect('guru-besar')
        ->with('delete', 'Guru Besar Berhasil Dihapus');
    }

}
