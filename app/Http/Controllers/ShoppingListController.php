<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    public function shoppingListGet(): View
    { 
        return view('shoppingList', [
                'product_name' => '',
                'product_cost'=> '',
                'product_amount'=> '',
                'shop_name'=> '',
                'product_barcode'=> '',
            ]);
    }

    public function shoppingListPost(Request $request): View
    { 
        //dd($request->all());
        $product_name = $request->input('product_name');
        $product_cost = $request->input('product_cost');
        $product_amount = $request->input('product_amount');
        $shop_name = $request->input('shop_name');
        $product_barcode = $request->input('product_barcode');

        return view('shoppingList', [
                'product_name' => $product_name,
                'product_cost'=> $product_cost,
                'product_amount'=> $product_amount,
                'shop_name'=> $shop_name,
                'product_barcode'=> $product_barcode,
            ]);
    }
}

