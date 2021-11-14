<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;


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

// home

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/page{page}', [IndexController::class, 'index']);

// search

Route::post('/filter', [IndexController::class, 'filter']);

// signin-signup

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom');


Route::get('/register', [AuthController::class, 'signup'])->name('register');
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration');


Route::get('/dashboard', [AuthController::class, 'dashboardView'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// display ad
Route::get('ad/{id}', [IndexController::class, 'displayad']);

// public profile
Route::get('public/profile/{nickname}', [IndexController::class, 'public']);

// crud user
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user'], function () {

   Route::get('profile/{nickname}', [IndexController::class, 'profile']);
   Route::get('{nickname}', [IndexController::class, 'displayuser']);
   Route::get('add/{nickname}', [IndexController::class, 'create']);
   Route::post('add/{nickname}', [IndexController::class, 'store']);
   Route::get('edit/{nickname}/ad/{ad_id}', [IndexController::class, 'edit']);
   Route::put('edit/{nickname}/ad/{ad_id}', [IndexController::class, 'update']);
   Route::delete('{nickname}/{ad_id}', [IndexController::class, 'destroy']);

   Route::get('info/profile/{nickname}', [IndexController::class, 'privateprofile']);
   Route::get('edit/{nickname}/user', [IndexController::class, 'edituser']);
   Route::put('edit/{nickname}/user', [IndexController::class, 'updateuser']);

});
