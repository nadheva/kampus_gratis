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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Penelitian $penelitian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penelitian $penelitian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penelitian $penelitian)
    {
        //
    }
}
