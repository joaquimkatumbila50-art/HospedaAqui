<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/hotelsamba', function () {
    return view('hotelsamba');
});
Route::get('/hotelaghata', function () {
    return view('hotelaghata');
});
Route::get('/hospedariamarazul', function () {
    return view('hospedariamarazul');
});
Route::get('/hospedariamiluna', function () {
    return view('hospedariamiluna');
});