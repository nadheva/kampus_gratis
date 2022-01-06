<?php

namespace App\Http\Controllers;

use App\Models\Penelitian;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penelitian = Penelitian::all();
        return view('admin.penelitian.index', compact('penelitian'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penelitian.create');
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
            'penulis' => 'required',
            'status' => 'required'
        ]);

        Penelitian::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'penulis' => $request->penulis,
            'status' => $request->status
        ]);
        return redirect()->route('data-penelitian.index')
            ->with('success', 'Data Penelitian Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function show(Penelitian $penelitian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penelitian = Penelitian::find($id);
        return view('admin.penelitian.edit', compact('penelitian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penelitian = penelitian::findOrFail($id);
        
        $penelitian->judul = $request->judul;
        $penelitian->isi = $request->isi;
        $penelitian->penulis = $request->penulis;
        $penelitian->status = $request->status;

        $penelitian->save();
        return redirect()->route('data-penelitian.index')
        ->with('edit', 'penelitian Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penelitian::where('id', $id)->delete();
        return redirect()->route('data-penelitian.index')
        ->with('delete', 'Data penelitian Berhasil Dihapus');
    }
}
