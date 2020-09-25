<?php

use Illuminate\Support\Facades\Route;

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

Route::get('band/{id}', [App\Http\Controllers\BandController::class, 'index'])->name('band');
Route::get('settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');
Route::get('settings/{id}', [App\Http\Controllers\SettingsController::class, 'showBand'])->name('settings');

Route::post('settings/{id}', [App\Http\Controllers\SettingsController::class, 'store']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
