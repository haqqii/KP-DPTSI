<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\AbsensiControllers;
use App\Http\Controllers\AbsensiController;

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
    return view('beranda.index');
});

// Route::get('/beranda/{btn-simpan}', function () {
//     return view('profil.index');
// });

Route::get('/absensi', 'App\Http\Controllers\absensiController@index');
Route::get('/rekapan', 'App\Http\Controllers\rekapanController@index');




// Route::get('/menu-sidebar', function () {
//     return view('partial.mahasiswa-menu-sidebar-monitor');
// });

