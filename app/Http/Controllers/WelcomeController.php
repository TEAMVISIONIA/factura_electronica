<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('dash.welcome');
    }

    public function store(Request $request)
    {
        return "Peticion POST";
    }
}
