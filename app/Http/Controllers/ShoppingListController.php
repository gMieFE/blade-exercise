<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    public function shoppingListRoute(): View
    { 
        return view('shoppingList');
    }
}

