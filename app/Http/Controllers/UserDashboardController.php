<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function administrasiPengguna(){
        return view ('admin.dashboard-user.detail-user');
    }

    public function administrasiUpdate()
    {
        
    }

    public function dataKeluarga()
    {
        return view('admin.dashboard-user.dataKeluarga');
    }

    public function dokumenPenting()
    {
        return view('admin.dashboard-user.dokumenPenting');
    }
}
