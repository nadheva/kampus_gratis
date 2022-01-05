<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function view()
    {
        $agenda = Agenda:: all();
        return view('landingpage.mahasiswa', compact('agenda'));
    }
}
