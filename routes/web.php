<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ShoppingListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'hello']);

Route::get('/form', [FormController::class, 'formGet'])->name('form');
Route::post('/form', [FormController::class, 'formPost']);


Route::get('/shoppingList', [ShoppingListController::class, 'shoppingListGet'])->name('shopping_list');
Route::post('/shoppingList', [ShoppingListController::class, 'shoppingListPost']);
Route::delete('/shoppingList', [ShoppingListController::class, 'shoppingListDelete'])->name('shopping_list.delete');




