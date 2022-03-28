<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index() {
        $agenda = Agenda::all();
        $running = Agenda::where('tanggal', '=', date('Y-m-d'))->get();
        $upcoming = Agenda::where('tanggal', '>', date('Y-m-d'))->get();
        return view('admin.agenda.index', compact('agenda', 'running', 'upcoming'));
    }

    public function create() {
        return view('admin.agenda.create');
    }

    public function store(Request $request) {
    
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'jenis' => 'required',
            'tanggal' => 'required'
        ]);

        $upload = $request->gambar;
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/agenda/". $file_name;
            $request->gambar->storeAs('public/agenda', $file_name);
        } else {
            $file_name = null;
        }

        Agenda::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $txt,
            'jenis' => $request->jenis,
            'tanggal' => $request->tanggal
        ]);
        return redirect()->route('agenda.index')
            ->with('success', 'Agenda Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $agenda = Agenda::find($id);
        return view('admin.agenda.detail', compact('agenda'));
    }

    public function edit($id)
    {
        $agenda = Agenda::find($id);

        return view('admin.agenda.edit', compact('agenda'));
    }


    public function update(Request $request, $id)
    {
        $agenda = Agenda::findOrFail($id);
        if (isset($request->gambar)){
            $extention = $request->gambar->extension();
            $file_name = time().'.'.$extention;
            $txt = "storage/agenda/". $file_name;
            $request->gambar->storeAs('public/agenda', $file_name);
            $agenda->gambar = $txt;
        }

        $agenda->deskripsi = $request->deskripsi;
        $agenda->judul = $request->judul;
        $agenda->tanggal = $request->tanggal;
        $agenda->jenis = $request->jenis;

        $agenda->save();
        return redirect()->route('agenda.index')
        ->with('edit', 'Agenda Berhasil Diedit');
    }

    public function destroy($id)
    {
        Agenda::where('id', $id)->delete();
        return redirect()->route('agenda.index')
        ->with('delete', 'agenda Berhasil Dihapus');
    }
}
