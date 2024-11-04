<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffGudangController;
use App\Http\Controllers\ManajerGudangController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login']);

Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'role:Admin']);
Route::get('/staff-gudang', [StaffGudangController::class, 'index'])->middleware(['auth', 'role:Staff Gudang']);
Route::get('/manajer-gudang', [ManajerGudangController::class, 'index'])->middleware(['auth', 'role:Manajer Gudang']);

Route::get('/admin', [AdminController::class, 'data'])->name('admin.dashboard')->middleware(['auth', 'role:Admin']);
Route::get('/staff-gudang', [StaffGudangController::class, 'data'])->name('staff.dashboard')->middleware(['auth', 'role:Staff Gudang']);
Route::get('/manajer-gudang', [ManajerGudangController::class, 'data'])->name('manajer.dashboard')->middleware(['auth', 'role:Manajer Gudang']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
