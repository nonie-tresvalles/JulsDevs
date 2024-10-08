<?php

use App\livewire\User\UserDashboard;
use App\livewire\Auth\AuthLogin;
use App\livewire\Auth\AuthRegister;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', AuthLogin::class)->name('login');
Route::get('/register', AuthRegister::class)->name('register');
Route::get('/user', UserDashboard::class)->name('user-dashboard');
