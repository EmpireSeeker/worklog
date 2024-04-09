<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\userController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ShipmentsController;



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

// for sign in
Route::get("/",[RegisterController::class,'welcome'])->name('welcome');
Route::post("/",[UserController::class,'login'])->name('login');



Route::post('/logout', [LogoutController::class,'logout'])->name('logout');


Route::get("/register",[UserController::class,'register'])->name('register');
Route::post("/register",[RegisterController::class,'register'])->name('registeration');

Route::get("/userdash",[UserController::class,'userdash'])->name('user');
Route::get("/admindash",[UserController::class,'admindash'])->name('admin');
Route::get("/quote",[QuoteController::class,'create'])->name('create');
Route::post("/quote",[QuoteController::class,'store'])->name('quote.store');

Route::get("/shipment/{tracking_number}", [ShipmentsController::class, 'track'])->name('track');
Route::get("/orderlist",[UserController::class,'order'])->name('order');
Route::delete('/users/{user}', [RegisterController::class, 'deleteUser'])->name('admin.deleteUser');
Route::get('/users/{user}/edit', [RegisterController::class, 'editUser'])->name('admin.editUser');
Route::put('/users/{user}', [RegisterController::class, 'updateUser'])->name('admin.updateUser');
