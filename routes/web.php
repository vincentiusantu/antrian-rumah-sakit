<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('user')->name('user.')->group(function (){
    Route::middleware(['guest:web'])->group(function (){
        Route::view('/landing', 'dashboard.user.landing')->name('landing');
        Route::view('/register', 'dashboard.user.register')->name('register');
        Route::view('/login', 'dashboard.user.login')->name('login');
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/dologin', [UserController::class, 'dologin'])->name('dologin');
    });
    Route::middleware(['auth:web'])->group(function (){
        Route::view('/home', 'dashboard.user.home')->name('home');
        Route::get('/aktifitas', [UserController::class, 'aktifitas'])->name('aktifitas');
        Route::get('/notifikasi', [UserController::class, 'notifikasi'])->name('notifikasi');
        Route::view('/akun', 'dashboard.user.akun')->name('akun');
        Route::view('/daftar', 'dashboard.user.daftar')->name('daftar');
        Route::view('/jadwal-dokter', 'dashboard.user.jadwal-dokter')->name('jadwal-dokter');
        Route::view('/poliklinik', 'dashboard.user.poliklinik')->name('poliklinik');
        Route::view('/info', 'dashboard.user.info')->name('info');
        Route::post('/edit', [UserController::class, 'edit'])->name('edit');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
        Route::post('/umum', [UserController::class, 'umum'])->name('umum');
        Route::post('/gigi', [UserController::class, 'gigi'])->name('gigi');
        Route::post('/kulit', [UserController::class, 'kulit'])->name('kulit');
        Route::post('/mata', [UserController::class, 'mata'])->name('mata');
        Route::post('/obgyn', [UserController::class, 'obgyn'])->name('obgyn');
    });
});
Route::prefix('admin')->name('admin.')->group(function (){
    Route::middleware(['guest:admin'])->group(function (){
        Route::view('/login', 'dashboard.admin.login')->name('login');
        Route::post('/dologin', [AdminController::class, 'dologin'])->name('dologin');
    });
    Route::middleware(['auth:admin'])->group(function (){
        Route::view('/home', 'dashboard.admin.home')->name('home');
        Route::get('/riwayat', [AdminController::class, 'riwayat'])->name('riwayat');
        Route::view('/akun', 'dashboard.admin.akun')->name('akun');
        Route::get('/list-user', [AdminController::class, 'listUser'])->name('list-user');
        Route::view('/jadwal-dokter', 'dashboard.admin.jadwal-dokter')->name('jadwal-dokter');
        Route::view('/poliklinik', 'dashboard.admin.poliklinik')->name('poliklinik');
        Route::view('/info', 'dashboard.admin.info')->name('info');
        Route::post('/edit-status/{id}', [AdminController::class, 'editStatus'])->name('edit-status');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});