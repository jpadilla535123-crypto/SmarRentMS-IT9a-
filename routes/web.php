<?php

use Illuminate\Support\Facades\Route;
use app\Http\NavController;

Route::get('/', function () {
    return view('analytics');
});

// Route::get('/dashboard', [NavController::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/properties', function () {
    return view('properties');
});

Route::get('/smartdevices', function () {
    return view('smartdevices');
});

Route::get('/tenants', function () {
    return view('tenants');
});

Route::get('/maintenance', function () {
    return view('maintenance');
});

Route::get('/login', function () {
    return view('login');
});