<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\UserController;


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


Route::resource("Hotel", HotelController::class);

Route::get('/cadastrar', function () {
    return view('cadastar');
});


Route::get('/listar', function () {
    return view('listar');
});




Route::get('/', function () {
    return view('home');
    });
    

Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('/hotels/create', [HotelController::class, 'create'])->name('hotels.create'); 

Route::post('/hotels', [HotelController::class, 'store'])->name('hotels.store');
Route::get('/hotels/{id}/edit', [HotelController::class, 'edit'])->name('hotels.edit');
Route::put('/hotels/{id}', [HotelController::class, 'update'])->name('hotels.update');
Route::delete('/hotels/{id}', [HotelController::class, 'destroy'])->name('hotels.destroy');







Route::get('/users', [UserController::class, 'index'])->name('users.listar');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); 

Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');




