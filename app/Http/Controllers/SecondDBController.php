<?php

namespace App\Http\Controllers;

use App\Models\UserDB2;
use Illuminate\Http\Request;

class SecondDBController extends Controller
{
    function list()
    {
        $user = UserDB2::all();
        dd($user);
        // return view('user', compact('user'));
    }
}
