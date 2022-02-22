<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        // $banner = Banner::all();
        return view('admin.dashboard');
    }
}
