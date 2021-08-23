<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anggota', function () {
    return view('anggota');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/report','App\Http\Controllers\Peminjamancontroller@report');


// Route::get('/report', function() {
//     $pdf = PDF::loadView('peminjaman')->output();
//     return Response::make($pdf, 200, ['list_peminjaman' => 'application/pdf']);
// });
// Route::get('/home',function() {
//     return View::make('home');
//    });



// Route::get('/', 'WebController@home');
// Route::get('/about','WebController@about');
// Route::get('/contact','WebController@contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource ('peminjaman', 'App\Http\Controllers\PeminjamanController');
Route::get ('/tambah', 'App\Http\Controllers\PeminjamanController@tambah');
Route::get ('/ubah/{no_bp}', 'App\Http\Controllers\PeminjamanController@ubah');
Route::get ('/delete/{no_bp}', 'App\Http\Controllers\PeminjamanController@delete');
Route::post ('/update', 'App\Http\Controllers\PeminjamanController@update');
Route::post ('/store', 'App\Http\Controllers\PeminjamanController@store');


