<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Illuminate\Support\now;

class ShoppingListController extends Controller
{



    public function shoppingListGet(): View
    { 
        $products = DB::select('select * from products');

        return view('shoppingList', [
                'products'=> $products,
            ]);
    }

    public function shoppingListPost(Request $request): View
    { 
        $product_name = $request->input('product_name');
        $product_cost = $request->input('product_cost');
        $product_amount = $request->input('product_amount');
        $shop_name = $request->input('shop_name');
        $product_barcode = $request->input('product_barcode');

        DB::insert(
            'insert into products (name, cost, amount, shop_name, barcode, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?)',
            [$product_name, $product_cost, $product_amount, $shop_name, $product_barcode, now(), now()]
        );

        $products = DB::select('select * from products');
        //dd($products);

        return view('shoppingList', [
                'products'=> $products,
            ]);
    }
}

