<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
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

Route::get('/', function () {
    return view('welcome');
});

// Register Route
Route::view('register','admin/register');
Route::post('sendregisterdata',[UserController::class,'registerUser']);

// Login Route
Route::view('login','admin/login');

// Dashboard route
Route::view('dashboard','admin/dashboard');

//all userdetails route
Route::view('userdetails','admin/userdetails');

// add userdetails route
Route::view('manage_userdetail','admin/manage_userdetail');
