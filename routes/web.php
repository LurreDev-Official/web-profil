<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Frontcontroller;

Route::get('/', function () {
    return view('user.beranda');
});

Route::get('/beranda', [Frontcontroller::class, 'beranda']);
Route::get('/tentang', [Frontcontroller::class, 'tentang']);    
//melanjutkan minimal 4 page 






