<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SopController;
use App\Http\Controllers\AturanController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\PeminjamanController;
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


// Grup Rute untuk AuthController
Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Rute untuk RegisterController
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Grup Rute untuk DashboardController
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pelayanan-create', [PelayananController::class, 'view_create'])->name('pelayanan-create');
    Route::post('/pelayanan-upload', [PelayananController::class, 'upload'])->name('pelayanan-upload');
    Route::get('/pelayanan-edit/${id}', [PelayananController::class, 'edit'])->name('pelayanan-edit');
    Route::put('/pelayanan-edit/${id}', [PelayananController::class, 'update'])->name('pelayanan-edit-action');
    
});

// Peminjaman
Route::resource('peminjaman-admin', PeminjamanController::class);
Route::get('/peminjaman-admin/${id}', [PeminjamanController::class,'update'])->name('peminjaman-update');
Route::post('/peminjaman-checkstatus', [PeminjamanController::class,'checkStatus'])->name('peminjaman-checkstatus');


// SOP
Route::resource('sop', sopController::class);
// Peraturan
Route::resource('aturan', aturanController::class);

// Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/peminjaman', [BerandaController::class, 'peminjaman'])->name('peminjaman');
// SOP-Beranda
Route::get('/peraturan', [PeraturanController::class, 'index'])->name('peraturan');
// jadwal
Route::get('/jadwal', [BerandaController::class, 'jadwal'])->name('jadwal');
Route::get('/jadwal-user', [BerandaController::class, 'jadwal_user'])->name('jadwal_user');
Route::get('/fasilitas', [BerandaController::class, 'fasilitas'])->name('fasilitas');

Route::resource('events', EventController::class);
Route::get('/calendar', [EventController::class, 'calendar'])->name('calendar');

Route::get('/jadwal', [PelayananController::class, 'index'])->name('jadwal');
Route::get('/kontak', [BerandaController::class, 'kontak'])->name('kontak');
