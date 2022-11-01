<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReferanceController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\XeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ExcelExportController;
use App\Http\Controllers\SalaroController;
use App\Http\Controllers\TunuqiController;
use App\Http\Controllers\RealizationController;
use App\Http\Controllers\ReqController;
use App\Http\Controllers\DajrilebiController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/',[IndexController::class, 'index'])->name('index');


Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/settings',[IndexController::class, 'settings'])->name('settings');
Route::patch('/updatepassword',[IndexController::class, 'updatepassword'])->name('updatepassword');

Route::get('/add_player', [IndexController::class, 'add_player'])->name('add_player');
Route::post('/add_player_insert', [IndexController::class, 'add_player_insert'])->name('add_player_insert');
Route::get('/player_search', [IndexController::class, 'player_search'])->name('player_search');
Route::get('/search', [IndexController::class, 'search'])->name('search');
Route::get('/shemosvlis_gatareba/{id}',[IndexController::class, 'shemosvlis_gatareba'])->name('shemosvlis_gatareba');
Route::get('/player_enter_details/{id}',[IndexController::class, 'player_enter_details'])->name('player_enter_details');
Route::get('/search_bydate', [IndexController::class, 'search_bydate'])->name('search_bydate');
Route::get('/edit_player/{id}', [IndexController::class, 'edit_player'])->name('edit_player');
Route::patch('/update_player/{id}', [IndexController::class, 'update_player'])->name('update_player');
