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

Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])
  ->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::resource('links', \App\Http\Controllers\LinksController::class);
Route::get('/{hash}', [\App\Http\Controllers\LinksController::class, 'show']);
