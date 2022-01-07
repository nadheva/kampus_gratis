<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use App\Models\GuruBesar;
use App\Models\Pengabdian;
use App\Models\Pengumuman;
use Carbon\Carbon;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function mahasiswa()
    {
        $agenda = Agenda::all();
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

    public function pengumuman()
    {
        $pengumuman = Pengumuman::all();
        return view('landingpage.pengumuman', compact('pengumuman'));
    }

    public function faq()
    {
        $gurubesar = GuruBesar::latest()->first();
        $beda = $gurubesar->created_at->diffInDays();
        return view('landingpage.faq', compact('beda'));
    }
}
