<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $weights = \App\Models\Weight::latest()->take(10)->get();
    return view('dashboard', compact('weights'));
});

