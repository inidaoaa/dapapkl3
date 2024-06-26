<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

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

Route::get('tes', function () {
    return view('layouts.front');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
    Route::get('/', function () {
        return view('admin.index');
    });
});

//admin

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // untuk Route Backend Lainnya
    Route::resource('user',App\Http\Controllers\UserController::class);         
});

//route depan
Route::get('/',[FrontController::class, 'index']);
Route::get('about', [FrontController::class, 'about']);
Route::get('contact', [frontController::class, 'contact']);
Route::get('product', [frontController::class, 'product']);
Route::get('shop', [frontController::class, 'shop']);

