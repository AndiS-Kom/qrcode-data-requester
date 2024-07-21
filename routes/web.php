<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EndUserController;

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/generate', [AdminController::class, 'generateHashes'])->name('admin.generate');
Route::get('/admin/qrcodes', [AdminController::class, 'showQRCodes'])->name('admin.qrcodes');

Route::get('/{hash}', [EndUserController::class, 'showInputForm'])->name('enduser.input');
Route::post('/{hash}', [EndUserController::class, 'storeData'])->name('enduser.store');