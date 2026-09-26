<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ShoppingListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'hello']);

Route::get('/form', [FormController::class, 'formGet'])->name('form');
Route::post('/form', [FormController::class, 'formPost']);


Route::get('/shoppingList', [ShoppingListController::class, 'shoppingListRoute'])->name('shoppingList');


