<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use App\Models\GuruBesar;
use App\Models\Pengabdian;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function mahasiswa()
    {
        $agenda = Agenda:: all();
        return view('landingpage.mahasiswa', compact('agenda'));
    }
    public function tentang() 
    {
        $gurubesar = GuruBesar::all();
        return view('landingpage.tentang', compact('gurubesar'));
    }

    public function pengabdian() 
    {
        $pengabdian = Pengabdian::all();
        return view('landingpage.pengabdian', compact('pengabdian'));
    }
}
