<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formGet(): View
    {
        return view('form', [
                'name' => '',
                'last_name'=> '',
            ]);
    }

    public function formPost(Request $request): View
    {
        //dd($request->all());
        $name = $request->input('name');
        $last_name = $request->input('last_name');

        return view('form', [
                'name' => $name,
                'last_name'=> $last_name,
            ]);
    }

    // public function formRoute(): View
    // {
    //     return view('form');
    // }
}