<?php
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Models\Event;
use Illuminate\Http\Request;
Route::prefix('catalog')->group(function () {

    Route::get('/categories', [CatalogController::class, 'categories']);

    Route::get('/category/{id}', [CatalogController::class, 'category']);

    Route::get('/product/{id}', [CatalogController::class, 'product']);

    Route::get('/search', [CatalogController::class, 'search']);

});


Route::middleware('auth:sanctum')->group(function () {
    /* Route::post('api/logout', [AuthenticatedSessionController::class, 'destroy']);
    Route::get('api/user', function (Request $request) {
        return response()->json($request->user());
    }); */
});