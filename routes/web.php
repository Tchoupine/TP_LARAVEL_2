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
<<<<<<< HEAD
Route::resource('freelancers', FreelancerController::class);
Route::post('/freelancers', [FreelancerController::class, 'store'])->name('freelancers.store');

=======
Route::resource('/freelancers', FreelancerController::class);
Route::post('/freelancers', [FreelancerController::class, 'store'])->name('freelancers.store');
>>>>>>> eea62851e1aad0af1a0ecdf287aa0bdb01200218

// Route::get('/', function () {
//     return view('welcome');
// });
