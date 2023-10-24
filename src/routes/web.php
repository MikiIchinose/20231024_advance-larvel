<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MiddlewareController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AuthorController;


Route::get('/', [TestController::class, 'index']);
Route::get('/', [AuthorController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::get('/middleware', [MiddlewareController::class, 'index']);
Route::post('/middleware', [MiddlewareController::class, 'post']);

Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);

