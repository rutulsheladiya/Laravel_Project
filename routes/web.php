<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;



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
Route::view('register', 'admin/register');
Route::post('sendregisterdata', [UserController::class, 'registerUser']);

// Login Route
Route::get('login', function () {
    return view('admin/login');
})->name('login');
Route::post('sendlogindata', [UserController::class, 'loginUser']);



Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard route
    Route::view('dashboard', 'admin/dashboard');

    //all userdetails route
    Route::view('userdetails', 'admin/userdetails');

    // add userdetails route
    Route::view('manage_userdetail', 'admin/manage_userdetail');

    // logout
    Route::get('logout', [UserController::class, 'logout']);
});

Route::get('/email/verify', function () {
    return view('admin.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('login');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification Link Resended..');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
