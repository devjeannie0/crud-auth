<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\Auth\Admin\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Auth::routes();

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin/login',[LoginController::class, 'showLogin'])->name('admin.login');
Route::get('/admin/register',[LoginController::class, 'showRegister'])->name('admin.register');
Route::post('/admin/login',[LoginController::class, 'login']);
Route::post('/admin/register',[RegisterController::class, 'register']);
Route::post('/admin/logout',[LoginController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => 'admin.auth'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
});