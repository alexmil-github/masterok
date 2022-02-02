<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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
Route::get('/', [ SiteController::class, 'home' ])->name('home');;
Route::get('/login', [ SiteController::class, 'loginForm' ])->name('login');
Route::post('/login', [ UserController::class, 'login' ]);
Route::get('/reg', [SiteController::class, 'reg']);
Route::post('/reg', [UserController::class, 'registration']);
Route::get('/logout', [ UserController::class, 'logout' ])->name('logout');

