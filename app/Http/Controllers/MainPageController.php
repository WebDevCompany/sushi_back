<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function show()
    {
        return view('Vlad.index');
    }
}
