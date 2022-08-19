<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends Controller
{
    public function show()
    {
        $product = Products::all();
        return view('admin.product', ['products' => $product]);
        //$product = Products::find(1);
        //echo $product->name;
        
        //foreach (Products::all() as $product) {
        //echo $product->name;
        //}
    }
}


