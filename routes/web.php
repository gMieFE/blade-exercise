<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'hello']);

Route::get('/form', [FormController::class, 'formGet']);
Route::post('/form', [FormController::class, 'formPost']);


