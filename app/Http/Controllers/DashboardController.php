<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Banner;
use App\Models\Berita;
use App\Models\GuruBesar;
use App\Models\Jurnal;
use App\Models\Penelitian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $banner = Banner::all()->count();
        $penelitian = Penelitian::all()->count();
        $berita = Berita::all()->count();
        $guruBesar = GuruBesar::all()->count();
        $agenda = Agenda::all()->count();
        $jurnal = Jurnal::all()->count();

        return view('admin.dashboard.index', compact('banner', 'penelitian', 'berita', 'guruBesar', 'agenda', 'jurnal'));
    }
}
