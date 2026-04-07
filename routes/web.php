<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WholesaleCatalogController;
use App\Http\Controllers\CartController;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth; //Auth namespace
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\AnthropometryController;


Route::get('/', function () {
    return view('/pages/home');
});


/* Route::get('/catalog', function () {
    return view('/pages/catalog');
}); */
Auth::routes(['verify' => true]);
Route::get('/catalogOpt', [WholesaleCatalogController::class, 'index']);


Route::post('/cart/add', [CartController::class,'add']);
Route::get('/cart/{cart}', [CartController::class,'show']);



Route::get('/email/verify', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verifyNew', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return view('auth.verify');
})->middleware('auth')->name('verification.verifyNew');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return __('Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.sendGet');
//Сброс пароля
Route::get('/forgot-password', function () {
    return view('auth.passwords.email');
})->middleware('guest')->name('password.request');
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __('Ссылка на изменение пароля отправлена на вашу почту')])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', function (string $token, Request $request) {
    $email = $request->query('email');
    return view('auth.passwords.reset', ['token' => $token, 'email' => $email]);
})->middleware('guest')->name('password.reset');