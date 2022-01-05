<?php

namespace App\Http\Controllers;
use App\Models\GuruBesar;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function view() {
        $gurubesar = GuruBesar::all();
        return view('landingpage.tentang', compact('gurubesar'));
    }
}
