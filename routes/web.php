<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin-control-center', function () {
    return view('admin-control-center');
});

Route::get('/admin-control-center/users/view', [UserController::class, 'index']);
