<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/conferences', [App\Http\Controllers\ConferenceController::class, 'index'])->name('conferences.index');
Route::get('/conferences/create', [App\Http\Controllers\ConferenceController::class, 'create'])->name('conferences.create');

Route::post('/conferences', [App\Http\Controllers\ConferenceController::class, 'store'])->name('conferences.store');

Route::get('/conferences/{conference}', [App\Http\Controllers\ConferenceController::class, 'show'])->name('conferences.show');
Route::get('/conferences/{conference}/edit', [App\Http\Controllers\ConferenceController::class, 'edit'])->name('conferences.edit');

Route::patch('/conferences/{conference}', [App\Http\Controllers\ConferenceController::class, 'update'])->name('conferences.update');
Route::delete('/conferences/{conference}', [App\Http\Controllers\ConferenceController::class, 'destroy'])->name('conferences.destroy');