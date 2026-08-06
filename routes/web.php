<?php

use App\Http\Controllers\TransController;
use App\Http\Controllers\AdminController;

// Route Halaman Utama
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('admin.dashboard'); // Letakkan file template Anda di resources/views/welcome.blade.php
});

// Route Simpan Data (CREATE dari Form Publik)
Route::post('/subscribe', [TransController::class, 'storeSubscriber'])->name('subscribe.store');
Route::post('/contact', [TransController::class, 'storeContact'])->name('contact.store');

// Route CRUD Admin (Bisa dibungkus middleware auth jika sudah ada sistem login)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    
    // Subscriber CRUD (Delete)
    Route::delete('/subscriber/{id}', [AdminController::class, 'destroySubscriber'])->name('subscriber.destroy');
    
    // Contact Us CRUD (Update & Delete)
    Route::patch('/contact/{id}/read', [AdminController::class, 'updateContactStatus'])->name('contact.update');
    Route::delete('/contact/{id}', [AdminController::class, 'destroyContact'])->name('contact.destroy');
});