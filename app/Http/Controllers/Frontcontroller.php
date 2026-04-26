<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontcontroller extends Controller
{
    //
    public function beranda()
    {
        return view('user.beranda');
    }

    public function tentang()
    {
        return view('user.tentang');
    }
}
