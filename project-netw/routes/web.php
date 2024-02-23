<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// //route halaman pertama/welcome
// Route::get('/', [HomeController::class, 'index']); 

//Route home
Route::get('home', function(){
    return view('main');
});

Route::get('loginp', function(){
    return view('login');
});

Route::get('registerr', function(){
    return view('register');
});

//untuk menampilkan data
Route::get('/users', [UsersController::class, 'index']);

//untuk menampilkan data yang dipilih
Route::get('/users/{Id}', [UsersController::class, 'index']);

//mengarahkan untuk menampilkan tampilan create
Route::get('/users/data/create', [UsersController::class, 'create']);

//untuk menyimpan data ke db
Route::post('/users', [UsersController::class, 'store']);

//untuk menampilkan view form data edit
Route::get('/users/{Id}/edit', [UsersController::class, 'edit']);

//mengupdate data ke db
Route::put('/users/{Id}', [UsersController::class, 'update']);

//mendelete data
Route::delete('/users/{Id}', [UsersController::class, 'destroy']);

