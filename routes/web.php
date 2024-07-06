<?php

use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/table', [PagesController::class, 'table'])->name('table');
Route::get('/details', [PagesController::class, 'details'])->name('details');
Route::resource('/freelancers', FreelancerController::class);

// Route::get('/', function () {
//     return view('welcome');
// });
