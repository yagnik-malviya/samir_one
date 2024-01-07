<?php

use App\Http\Controllers\user\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MenuController::class, 'index'])->name('index');
Route::get('buy', [MenuController::class, 'buy'])->name('buy');
Route::get('sell', [MenuController::class, 'sell'])->name('sell');
Route::get('rent', [MenuController::class, 'rent'])->name('rent');
Route::get('contact', [MenuController::class, 'contact'])->name('contact');
