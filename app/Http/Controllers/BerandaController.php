<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use App\Models\GuruBesar;
use App\Models\Pengabdian;
use App\Models\Pengumuman;
use App\Models\Alumni;
use App\Models\Banner;
use App\Models\Jurnal;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function mahasiswa()
    {
        $agenda = Agenda::all();
        $prestasi = Prestasi::all();
        $tahun = Prestasi::select('tahun');
        return view('landingpage.mahasiswa', compact('agenda', 'prestasi', 'tahun'));
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
    
    public function alumni() 
    {
        $alumni = Alumni::all();
        return view('landingpage.alumni', compact('alumni'));
    }
    
    public function beranda()
    {
        $banner = Banner::all();
        return view('landingpage.index',compact('banner'));
    }
    public function penelitian()
    {
        $jurnal = Jurnal::all();
        return view('landingpage.penelitian',compact('jurnal'));
    }

}
