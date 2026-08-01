<?php
use App\Http\Controllers\Api\ParentProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('parent-profile', ParentProfileController::class);

});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
