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
route::group(['middleware' => ['auth']], function () {
    Route::get('/list_ird', [irdController::class,'readData']);
    Route::get('/channels', [chnController::class, 'readData']);
    // Route::get('/dashboard', [DashboardController::class, 'readData']);
    Route::get('/dashboard', [irdController::class, 'detail']);

    Route::get('/input', [irdController::class,'index']);
    Route::post('/input', [irdController::class,'store']);

    Route::get('/', [irdController::class,'hitung']);

    Route::get('/channel', [chnController::class, 'input']);
    Route::get('/channel/hapus/{id}', [chnController::class, 'hapus']);
    Route::get('/channel/edit/{id}', [chnController::class, 'edit']);
    Route::post('/channel/edit/{id}', [chnController::class, 'postEdit']);
    Route::post('/channel', [chnController::class, 'store']);
    Route::post('/test', [chnController::class, 'http_get']);

});
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);
Route::post('/register', [registerController::class, 'store']);

route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::get('/register', [registerController::class, 'index']);
});










// Route::get('/dashboard', [DashboardController::class,'index']);

