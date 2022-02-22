<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardApotekController;
use App\Http\Controllers\DashboardDiagnosaController;

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


// Index
Route::get('/', [HomeController::class, 'home']);
Route::get('/diagnoses', [HomeController::class, 'diagnoses']);
Route::get('/logout', [HomeController::class, 'logout']);
Route::get('/history', [HomeController::class, 'history']);
Route::get('/medicine', [HomeController::class, 'medicine']);
Route::get('/medicineobat', [HomeController::class, 'medicine1']);
Route::get('/order', [HomeController::class, 'order1']);
Route::get('/order2', [HomeController::class, 'order2']);

//Profile Handle
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('edit_user');
Route::put('/apotek/{user}', [ProfileController::class, 'update'])->name('update_user');

// Login and Registration Handler
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/registration', [RegistrationController::class, 'index'])->middleware('guest');
Route::post('/registration', [RegistrationController::class, 'store'])->middleware('guest');

// After Login Dashboard

// Apotek
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/apotek', [DashboardApotekController::class, 'index']);
Route::post('/apotek/create', [DashboardApotekController::class, 'store']);
Route::get('/apotek/create', [DashboardApotekController::class, 'create']);
Route::delete('/apotek/{apotek}', [DashboardApotekController::class, 'destroy'])->name('delete_apotek');
Route::get('/apotek/{apotek}/edit', [DashboardApotekController::class, 'edit'])->name('edit_apotek');
Route::patch('/apotek/{apotek}', [DashboardApotekController::class, 'update'])->name('update_apotek');

// Diagnosa
Route::get('/diagnosa', [DashboardDiagnosaController::class, 'index']);
Route::post('/diagnosa/create', [DashboardDiagnosaController::class, 'store']);
Route::get('/diagnosa/create', [DashboardDiagnosaController::class, 'create']);
Route::delete('/diagnosa/{diagnosa}', [DashboardDiagnosaController::class, 'destroy'])->name('delete_diagnosa');
Route::get('/diagnosa/{diagnosa}/edit', [DashboardDiagnosaController::class, 'edit'])->name('edit_diagnosa');
Route::put('/diagnosa/{diagnosa}', [DashboardDiagnosaController::class, 'update'])->name('update_diagnosa');