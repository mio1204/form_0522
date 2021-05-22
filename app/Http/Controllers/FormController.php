<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function thanks(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        return view('/thanks')->with([
            "name" => $name,
            "email"  => $email,
        ]);
    }
}
