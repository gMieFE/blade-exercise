<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Illuminate\Support\now;

class ShoppingListController extends Controller
{
    private const array PRODUCTS = [
        0 => [
            "name"=> "abc",
            "cost"=> "123",
            "amount"=> "1",
            "store_name"=> "shop",
            "barcode"=> "b1a2r3c4o5d6",
        ],
        1=> [
            "name"=> "wah",
            "cost"=> "321",
            "amount"=> "3",
            "store_name"=> "shop1",
            "barcode"=> "b1a2r3c4oasf",
        ],
        2=> [
            "name"=> "noo",
            "cost"=> "55",
            "amount"=> "1",
            "store_name"=> "shop4",
            "barcode"=> "barkodas1234",
        ]
    ];




    public function shoppingListGet(): View
    { 
        return view('shoppingList', [
                'products'=> self::PRODUCTS,
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
        //dd($request->all());

        return view('shoppingList', [
                'products'=> self::PRODUCTS,
            ]);
    }
}

