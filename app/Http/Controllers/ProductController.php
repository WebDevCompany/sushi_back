<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;

use Illuminate\Support\Str;
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
          $product = Products::where('id', $id)->first();
          $categories = Categories::all();
          
          //dd($product);
          //dd($product->name);
          //Использовать при создании нового товара!
          //$slug = Str::of('Laravel Framework')->slug('-');
          return view('admin.editproduct', ['product' => $product, 'categories' => $categories]);
        }
    }
}


