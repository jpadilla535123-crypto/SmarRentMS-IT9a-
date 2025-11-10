<?php

use Illuminate\Support\Facades\Route;
use app\Http\NavController;

Route::get('/', function () {
    return view('analytics');
});

// Route::get('/dashboard', [NavController::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/properties', function () {
    return view('properties');
})->name('properties');

Route::get('/smartdevices', function () {
    return view('smartdevices');
})->name('smartdevices');

Route::get('/tenants', function () {
    return view('tenants');
})->name('tenants');

Route::get('/maintenance', function () {
    return view('maintenance');
})->name('maintenance');

Route::get('/analytics', function () {
    return view('analytics');
})->name('analytics');

Route::get('/login', function () {
    return view('login');
});