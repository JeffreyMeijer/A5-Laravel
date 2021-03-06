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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('band/{id}', [App\Http\Controllers\BandController::class, 'index'])->name('band');
Route::get('settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');
Route::get('settings/{id}/name', [App\Http\Controllers\SettingsController::class, 'showNamePage'])->name('settings');
Route::get('settings/{id}/photo', [App\Http\Controllers\SettingsController::class, 'showPhotoPage'])->name('settings');
Route::get('settings/{id}/text', [App\Http\Controllers\SettingsController::class, 'showTextPage'])->name('settings');
Route::get('settings/{id}/embed', [App\Http\Controllers\SettingsController::class, 'showEmbedPage'])->name('settings');
Route::get('settings/{id}/owner', [App\Http\Controllers\SettingsController::class , 'showOwnerPage'])->name('settings');
Route::get('settings/{id}/owner/delete/{user}', [App\Http\Controllers\SettingsController::class, 'deleteOwner'])->name('settings');


Route::post('settings/{id}/photo', [App\Http\Controllers\SettingsController::class, 'storePhoto']);
Route::post('settings/{id}/name', [App\Http\Controllers\SettingsController::class, 'storeName']);
Route::post('settings/{id}/text', [App\Http\Controllers\SettingsController::class, 'storeText']);
Route::post('settings/{id}/embed', [App\Http\Controllers\SettingsController::class, 'storeEmbed']);
Route::post('settings/{id}/owner/add', [App\Http\Controllers\SettingsController::class, 'storeOwner'])->name('settings');
Auth::routes();

Route::post('search', [App\Http\Controllers\HomeController::class, 'search']);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
