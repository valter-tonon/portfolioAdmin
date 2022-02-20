<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SocialProfileController;
use App\Http\Controllers\UserInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichaa
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace' => 'V1', 'prefix' => 'v1'], function () {
    Route::get('about', [AboutController::class, 'index']);
    Route::get('user-info', [UserInfoController::class, 'index']);
    Route::get('social-links', [SocialProfileController::class, 'index']);
    Route::get('skills', [SkillController::class, 'index']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
