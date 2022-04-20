<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\chnController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\irdController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;


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
//     return view('/login');
// });

Route::get('/list_ird', [irdController::class,'readData'])->middleware('auth');
Route::get('/channel', [chnController::class, 'readData'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'readData'])->middleware('auth');

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);
 

Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);

Route::get('/input', [irdController::class,'index'])->middleware('auth');
Route::post('/input', [irdController::class,'store']);

Route::get('/', [irdController::class,'hitung'])->middleware('auth');

Route::get('/channels', [chnController::class, 'index'])->middleware('auth');
Route::post('/channels', [chnController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class,'index']);

