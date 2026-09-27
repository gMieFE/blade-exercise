<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class ShoppingListController extends Controller
{
    public function shoppingListGet(): View
    { 
        $products = Product::all();

        return view('shoppingList', [
                'products'=> $products,
            ]);
    }

    public function shoppingListPost(Request $request)
    { 
        $product_name = $request->input('product_name');
        $product_cost = $request->input('product_cost');
        $product_amount = $request->input('product_amount');
        $shop_name = $request->input('shop_name');
        $product_barcode = $request->input('product_barcode');

        
        Product::create([
            'name' => $product_name,
            'cost'=> $product_cost,
            'amount'=> $product_amount,
            'shop_name'=> $shop_name,
            'barcode'=> $product_barcode
        ]);

        //dd($products);

        return redirect('shoppingList');
    }
}

