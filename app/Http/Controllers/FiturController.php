<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fitur = Fitur::all();
        return view('admin.fitur.index', compact('fitur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fitur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'gambar' => 'required',
        //     'fitur' => 'required',
        //     'deskripsi' => 'required',
        // ]);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/fitur/". $file_name;
            $request->gambar->storeAs('public/fitur', $file_name);
        } else {
            $file_name = null;
        }

        Fitur::create([
            'gambar' => $txt,
            'fitur' => $request->fitur,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('data-fitur.index')
            ->with('success', 'Data Fitur Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fitur  $fitur
     * @return \Illuminate\Http\Response
     */
    public function show(Fitur $fitur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fitur  $fitur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fitur = Fitur::find($id);
        return view('admin.fitur.edit', compact('fitur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fitur  $fitur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fitur = Fitur::findOrFail($id);
        if (isset($request->gambar)){
            $extention = $request->gambar->extension();
            $file_name = time().'.'.$extention;
            $txt = "storage/fitur/". $file_name;
            $request->gambar->storeAs('public/fitur', $file_name);
            $fitur->gambar = $txt;
            $fitur->fitur = $request->fitur;
            $fitur->deskripsi = $request->deskripsi;
        }else{}

        $fitur->save();
        return redirect()->route('data-fitur.index')
        ->with('edit', 'Fitur Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fitur  $fitur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fitur::where('id', $id)->delete();
        return redirect()->route('data-fitur.index')
        ->with('delete', 'Fitur Berhasil Dihapus');
    }
}
