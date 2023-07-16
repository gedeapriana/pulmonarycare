<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\AuthController;
    use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => []], function () {
  Route::get('/',             [UserController::class, 'index'])       ->name('beranda');
  Route::get('/penyakit',     [UserController::class, 'penyakit'])    ->name('penyakit');
  Route::get('/pemeriksaan',  [UserController::class, 'pemeriksaan']) ->name('pemeriksaan');
  Route::get('/artikel',      [UserController::class, 'artikel'])     ->name('artikel');
  Route::get('/tentang',      [UserController::class, 'tentang'])     ->name('tentang');
});


Route::group(['middleware' => ['auth']], function () {
  Route::get('/konsultasi', [ConsultationController::class, 'form'])->name('konsultasi');
  Route::post('/konsultasi', [ConsultationController::class, 'formStore'])->name('submit-konsultasi');
  Route::get('/gejala', [ConsultationController::class, 'symptom'])->name('gejala');
  Route::put('/gejala', [ConsultationController::class, 'symptomUpdate'])->name('submit-gejala');
  Route::get('/diagnosa', [ConsultationController::class, 'diagnosis'])->name('diagnosa');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('submit-login');
Route::get('/logout', [AuthController::class, 'logout'])->name('submit-logout');
Route::get('/register', [AuthController::class, 'login'])->name('register');
