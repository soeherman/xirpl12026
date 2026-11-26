<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;

Route::get('/', function () {
    return view('beranda');
});

Route::resource('jurusan', JurusanController::class);