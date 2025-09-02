<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorldsController extends Controller
{
    public function index()
    {
        return view('worlds.index');
    }

    public function show()
    {
        return view('worlds.show');
    }
}
