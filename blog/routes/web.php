<?php

use App\Http\Controllers\CastController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/register', [DashboardController::class, 'form']);
Route::post('/welcome', [DashboardController::class, 'welcome']);

Route::get('/tables', function(){
    return view('pages.table');
});
Route::get('/data-tables', function(){
    return view('pages.data-table');
});

Route::resource('cast', CastController::class);
