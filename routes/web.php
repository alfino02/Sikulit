<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Dashboard;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\RoleController;
use \App\Http\Controllers\HasilController;
use \App\Http\Controllers\ObatController;
use \App\Http\Controllers\PenyakitController;
use \App\Http\Controllers\GejalaController;
use \App\Http\Controllers\AturanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard_DokterController;
use \App\Http\Controllers\KonsultasiController;
use \App\Http\Controllers\HasilpasienController;
use \App\Http\Controllers\Dashboard_UserController;

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
Route::get('/login', [AuthController::class, 'login'])->name("login");
Route::post('/login', [AuthController::class, 'submit']);

Route::get('/logout', [AuthController::class, 'logout'])->name("logout");


Route::get('/register', [AuthController::class, 'register'])->name("register");
Route::post('/register/store', [AuthController::class, 'store'])->name("register.store");

Route::group(['middleware' => ['is_admin']], function () {
    Route::get('/dashboard',  [Dashboard::class, 'index'])->name("dashboard");


    // Role
    Route::get('/role',  [RoleController::class, 'index'])->name("role");
    Route::get('/role/create',  [RoleController::class, 'create'])->name("role.create");
    Route::post('/role/store',  [RoleController::class, 'store'])->name("role.store");
    Route::get('/role/edit/{id}',  [RoleController::class, 'edit'])->name("role.edit");
    Route::patch('/role/update/{id}',  [RoleController::class, 'update'])->name("role.update");
    Route::get('/role/destroy/{id}',  [RoleController::class, 'destroy'])->name("role.destroy");

    // User
    Route::get('/user',  [UserController::class, 'index'])->name("user");
    Route::get('/user/create',  [UserController::class, 'create'])->name("user.create");
    Route::post('/user/store',  [UserController::class, 'store'])->name("user.store");
    Route::get('/user/edit{id}',  [UserController::class, 'edit'])->name("user.edit");
    Route::get('/user/update/{id}',  [UserController::class, 'update'])->name("user.update");
    Route::get('/user/destroy/{id}',  [UserController::class, 'destroy'])->name("user.destroy");
    //hasil
    Route::get('/hasil',  [HasilController::class, 'index'])->name("hasil");
    Route::get('/hasil/create',  [HasilController::class, 'create'])->name("hasil.create");
    Route::post('/hasil/store',  [HasilController::class, 'store'])->name("hasil.store");
    Route::get('/hasil/edit/{id}',  [HasilController::class, 'edit'])->name("hasil.edit");
    Route::patch('/hasil/update/{id}',  [HasilController::class, 'update'])->name("hasil.update");
    Route::get('/hasil/destroy/{id}',  [HasilController::class, 'destroy'])->name("hasil.destroy");
});

    Route::group(['middleware' => ['is_dokter']], function () {
    Route::get('/dashboard-dokter',  [Dashboard_DokterController::class, 'index'])->name("dashboarddokter");

    //penyakit
    Route::get('/penyakit',  [PenyakitController::class, 'index'])->name("penyakit");
    Route::get('/penyakit/create', [PenyakitController::class, 'create'])->name("penyakit.create");
    Route::post('/penyakit/store', [PenyakitController::class, 'store'])->name("penyakit.store");
    Route::get('/penyakit/edit/{id}', [PenyakitController::class, 'edit'])->name("penyakit.edit");
    Route::patch('/penyakit/update/{id}', [PenyakitController::class, 'update'])->name("penyakit.update");
    Route::get('/penyakit/destroy/{id}', [PenyakitController::class, 'destroy'])->name("penyakit.destroy");
    //obat
    Route::get('/obat',  [ObatController::class, 'index'])->name("obat");
    Route::get('/obat/create',  [ObatController::class, 'create'])->name("obat.create");
    Route::post('/obat/store',  [ObatController::class, 'store'])->name("obat.store");
    Route::get('/obat/edit/{id}',  [ObatController::class, 'edit'])->name("obat.edit");
    Route::patch('/obat/update/{id}',  [ObatController::class, 'update'])->name("obat.update");
    Route::get('/obat/destroy/{id}',  [ObatController::class, 'destroy'])->name("obat.destroy");
    //gejala
    Route::get('/gejala',  [GejalaController::class, 'index'])->name("gejala");
    Route::get('/gejala/create',  [GejalaController::class, 'create'])->name("gejala.create");
    Route::post('/gejala/store',  [GejalaController::class, 'store'])->name("gejala.store");
    Route::get('/gejala/edit/{id}',  [GejalaController::class, 'edit'])->name("gejala.edit");
    Route::patch('/gejala/update/{id}',  [GejalaController::class, 'update'])->name("gejala.update");
    Route::get('/gejala/destroy/{id}',  [GejalaController::class, 'destroy'])->name("gejala.destroy");
    //aturan
    Route::get('/aturan',  [AturanController::class, 'index'])->name("aturan");
    Route::get('/aturan/create',  [AturanController::class, 'create'])->name("aturan.create");
    Route::post('/aturan/store',  [AturanController::class, 'store'])->name("aturan.store");
    Route::get('/aturan/edit/{id}',  [AturanController::class, 'edit'])->name("aturan.edit");
    Route::patch('/aturan/update/{id}',  [AturanController::class, 'gejala'])->name("aturan.update");
    Route::get('/aturan/destroy/{id}',  [AturanController::class, 'destroy'])->name("aturan.destroy");
});

Route::group(['middleware' => ['is_user']], function () {
    Route::get('/dashboard-user',  [Dashboard_UserController::class, 'index'])->name("dashboarduser");


//konsultasi
Route::get('/konsultasi',  [KonsultasiController::class, 'index'])->name("konsultasi");
Route::get('/konsultasi/create',  [KonsultasiController::class, 'create'])->name("konsultasi.create");
Route::post('/konsultasi/store',  [KonsultasiController::class, 'store'])->name("konsultasi.store");
Route::get('/konsultasi/edit/{id}',  [KonsultasiController::class, 'edit'])->name("konsultasi.edit");
Route::patch('/konsultasi/update/{id}',  [KonsultasiController::class, 'gejala'])->name("konsultasi.update");
Route::get('/konsultasi/destroy/{id}',  [KonsultasiController::class, 'destroy'])->name("konsultasi.destroy");


//hasilpasien
Route::get('/hasilpasien',  [HasilpasienController::class, 'index'])->name("hasilpasien");
Route::get('/hasilpasien/create',  [HasilpasienController::class, 'create'])->name("hasilpasien.create");
Route::post('/hasilpasien/store',  [HasilpasienController::class, 'store'])->name("hasilpasien.store");
Route::get('/hasilpasien/edit/{id}',  [HasilpasienControllerr::class, 'edit'])->name("hasilpasien.edit");
Route::patch('/hasilpasien/update/{id}',  [HasilpasienController::class, 'gejala'])->name("hasilpasien.update");
Route::get('/hasilpasien/destroy/{id}',  [HasilpasienController::class, 'destroy'])->name("hasilpasien.destroy");
});
















