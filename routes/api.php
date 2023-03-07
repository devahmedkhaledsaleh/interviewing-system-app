<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeamsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\InterviewsController;
use App\Http\Controllers\TechnicalTopicsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'teams'], function () {
    Route::get('/', [TeamsController::class, 'index']);
    Route::post('/create', [TeamsController::class, 'store']);
    Route::post('/edit/{id}', [TeamsController::class, 'update']);
    Route::get('/delete/{id}', [TeamsController::class, 'destroy']);
    Route::get('/team/{id}', [TeamsController::class, 'show']);
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UsersController::class, 'index']);
    Route::post('/create', [UsersController::class, 'store']);
    Route::post('/edit/{id}', [UsersController::class, 'update']);
    Route::get('/delete/{id}', [UsersController::class, 'destroy']);
    Route::get('/user/{id}', [UsersController::class, 'show']);
});

Route::group(['prefix' => 'candidates'], function () {
    Route::get('/', [CandidatesController::class, 'index']);
    Route::post('/create', [CandidatesController::class, 'store']);
    Route::post('/edit/{id}', [CandidatesController::class, 'update']);
    Route::get('/delete/{id}', [CandidatesController::class, 'destroy']);
    Route::get('/candidate/{id}', [CandidatesController::class, 'show']);
});

Route::group(['prefix' => 'tags'], function () {
    Route::get('/', [TagsController::class, 'index']);
    Route::post('/create', [TagsController::class, 'store']);
    Route::post('/edit/{id}', [TagsController::class, 'update']);
    Route::get('/delete/{id}', [TagsController::class, 'destroy']);
    Route::get('/tag/{id}', [TagsController::class, 'show']);
});

Route::group(['prefix' => 'interviews'], function () {
    Route::get('/', [InterviewsController::class, 'index']);
    Route::post('/create', [InterviewsController::class, 'store']);
    Route::post('/edit/{id}', [InterviewsController::class, 'update']);
    Route::get('/delete/{id}', [InterviewsController::class, 'destroy']);
    Route::get('/interview/{id}', [InterviewsController::class, 'show']);
});

Route::group(['prefix' => 'technical-topics'], function () {
    Route::get('/', [TechnicalTopicsController::class, 'index']);
    Route::post('/create', [TechnicalTopicsController::class, 'store']);
    Route::post('/edit/{id}', [TechnicalTopicsController::class, 'update']);
    Route::get('/delete/{id}', [TechnicalTopicsController::class, 'destroy']);
    Route::get('/technical-topic/{id}', [TechnicalTopicsController::class, 'show']);
});
