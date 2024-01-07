<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('test', [DashboardController::class, 'test'])->name('test');
Route::get('view_form', [DashboardController::class, 'view_form'])->name('view_form');
Route::post('view_form_insert', [DashboardController::class, 'view_form_insert'])->name('view_form_insert');
Route::get('view_data', [DashboardController::class, 'view_data'])->name('view_data');

Route::get('samir_view_form', [DashboardController::class, 'samir_view_form'])->name('samir_view_form');
Route::post('samir_view_form_insert', [DashboardController::class, 'samir_view_form_insert'])->name('samir_view_form_insert');
Route::get('samir_list_view_form', [DashboardController::class, 'samir_list_view_form'])->name('samir_list_view_form');

