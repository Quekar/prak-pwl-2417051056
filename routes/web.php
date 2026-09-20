<?php

use App\Http\Controllers\ProfileController;

Route::get('/profile/{nama}/{npm}/{kelas}', [ProfileController::class, 'profile']);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
