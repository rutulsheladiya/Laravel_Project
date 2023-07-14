<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\UserController;
use App\Models\Employee;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\EmployeeController;


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
    // ->middleware(['can:isAdmin, App\Models\User']); - policy
    // ->middleware(['can:isAdmin']);  - Gate

    // add userdetails route
    Route::view('manage_userdetail', 'admin/manage_userdetail');
    Route::post('sendmanageuserdetail', [EmployeeController::class, 'store']);
    // ->middleware(['can:isAdmin']);

    // logout
    Route::get('logout', [UserController::class, 'logout']);
});

// notice route if email is not verified
Route::get('/email/verify', function () {
    return view('admin.verify-email');
})->middleware('auth')->name('verification.notice');

// route for when user click on verify link or btn
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('login');
})->middleware(['auth', 'signed'])->name('verification.verify');

//route for resend email verification link
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification Link Resended..');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//route for forgot password
Route::get('/forgot-password', function () {
    return view('admin.forgot-password');
})->middleware('guest')->name('password.request');

// this route is for verify user email and sending email
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');


// route for view of reset password form
Route::get('/reset-password/{token}', function (string $token) {
    return view('admin.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

// update password of new created password
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
