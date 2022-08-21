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
    public function show($id=0)
    {
        if ($id == 0) {
          $products = Products::all();
          return view('admin.product', ['products' => $products]);  
        } else {
          $product = Products::where('id', $id);
          //dd($product);
          return view('admin.editproduct', ['product' => $product]);
        }
    }
}


