<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;

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

Route::get('guru/where',[GuruController::class, 'where']);
Route::post('guru/store',[GuruController::class, 'store'])->name('guru.store');
Route::get('/',[GuruController::class, 'where']);
// Route::resource('guru', GuruController::class);
