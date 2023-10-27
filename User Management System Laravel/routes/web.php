<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LoginController;


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

Route::controller(LoginController::class)->group(function(){

    Route::get('/', 'index')->name('login');
    Route::get('logout', 'logout')->name('logout');
    Route::post('validate_login', 'validate_login')->name('validate_login');
    Route::get('userProfile', 'userProfile')->name('userProfile');
    Route::post('userProfile','update')->name('update');

});

Route::get('/users', [UserController::class,'index'] )->name('user');
Route::any('/users', [UserController::class, 'index'])->name('user');
Route::resource("/users", UserController::class);
Route::resource("/departments", DepartmentController::class);
