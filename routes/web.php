<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate']);

Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard_admin', function(){
    return view('dashboard_admin',[
        "title" => "Dashboard"
    ]);
});

Route::get('/pegawai_admin', function(){
    return view('pegawai_admin',[
        "title" => "Pegawai"
    ]);
});

Route::get('/tambah_pegawai', function(){
    return view('tambah_pegawai',[
        "title" => "Tambah Pegawai"
    ]);
});

Route::get('/kandang_admin', function(){
    return view('kandang_admin',[
        "title" => "Kandang"
    ]);
});

Route::get('/laporan_admin', function(){
    return view('laporan_admin',[
        "title" => "Laporan"
    ]);
});

Route::get('/simulasi', function(){
    return view('simulasi',[
        "title" => "simulasi"
    ]);
});

Route::get('/kandang', function(){
    return view('kandang',[
        "title" => "Kandang"
    ]);
});

Route::get('/dashboard', function(){
    return view('dashboard',[
        "title" => "Dashboard"
    ]);
});
