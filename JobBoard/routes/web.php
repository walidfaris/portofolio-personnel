<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;




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
    return view('index');
});

Route::get('/admin', [AuthController::class, 'home'])->name('admin');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('postlogin', [AuthController::class, 'login'])->name('postlogin');
Route::get('signup', [AuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [AuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');





Route::resource('advertisements',AdvertisementController::class);

Route::get('offres',[HomeController::class,'index'])->name('offres');


Route::resource('informations',InformationController::class);