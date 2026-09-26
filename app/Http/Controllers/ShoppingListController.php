<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    public function shoppingListGet(): View
    { 
        return view('shoppingList');
    }

    public function shoppingListPost(): View
    { 
        return view('shoppingList');
    }
}

