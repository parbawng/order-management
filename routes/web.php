<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('order.home');
});
Auth::routes(['register' => false, ]);
Route::prefix('order')->name('order.')->middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
