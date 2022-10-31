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

Route::get('/conferences', [App\Http\Controllers\ConferenceController::class, 'index'])->name('conference.index');
Route::get('/conferences/create', [App\Http\Controllers\ConferenceController::class, 'create'])->name('conference.create');

Route::post('/conferences', [App\Http\Controllers\ConferenceController::class, 'store'])->name('conference.store');
