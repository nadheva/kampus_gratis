<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    function administrasiPengguna(){
        return view ('admin.detail-user');
    }

    function administrasiUpdate()
    {
        
    }
}
