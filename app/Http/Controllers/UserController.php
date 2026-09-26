<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello(Request $request): View
    {
        $name = $request->query('name');
 
 
        return view('app', [
                'name' => $name,
            ]);
    }
}

