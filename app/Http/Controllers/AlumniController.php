<?php

namespace App\Http\Controllers;
use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index() {
        $alumni = Alumni::all();
        return view('admin.alumni.index', compact('alumni'));
    }

    public function create() {
        return view('admin.alumni.create');
    }

    public function store(Request $request) {
    
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
            'lulusan' => 'required',
            'program' => 'required'
        ]);

        $upload = $request->foto;
        if (isset($request->foto)) {
            $extention = $request->foto->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/alumni/". $file_name;
            $request->foto->storeAs('public/alumni', $file_name);
        } else {
            $file_name = null;
        }

        Alumni::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $txt,
            'lulusan' => $request->lulusan,
            'program' => $request->program,
            'program_studi' => $request->program_studi
        ]);
        return redirect()->route('alumni.index')
            ->with('success', 'Alumni Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $alumni = Alumni::find($id);

        return view('admin.alumni.edit', compact('alumni'));
    }

    public function update(Request $request, $id)
    {
        $alumni = Alumni::findOrFail($id);
        if (isset($request->foto)){
            $extention = $request->foto->extension();
            $file_name = time().'.'.$extention;
            $txt = "storage/alumni/". $file_name;
            $request->foto->storeAs('public/alumni', $file_name);
            $alumni->foto = $txt;
            $alumni->deskripsi = $request->deskripsi;
            $alumni->nama = $request->nama;
            $alumni->lulusan = $request->lulusan;
            $alumni->program_studi = $request->program_studi;
            $alumni->program = $request->program;
        }else{}

        $alumni->save();
        return redirect()->route('alumni.index')
        ->with('edit', 'Alumni Berhasil Diedit');
    }

    public function destroy($id)
    {
        Alumni::where('id', $id)->delete();
        return redirect()->route('alumni.index')
        ->with('delete', 'Alumni Berhasil Dihapus');
    }
}
