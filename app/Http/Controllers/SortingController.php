<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class SortingController extends Controller
{
    public function sortResult()
    {
        $sortResult = DB::table('products')->orderBy('prise')->cursorPaginate(10);
        return view('');
    }
}
