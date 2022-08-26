<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Image;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller {

  //Вывод фото по умолчанию.

  public function show($id = 0) {
    if ($id == 0) {
      $products = Products::all();
      return view('admin.product', ['products' => $products]);
    } else {
      $product = Products::where('id', $id)->first();

      $categories = Categories::all();
      //$image = Products::where('id', $id)->first()->product;
      $collectImage = Products::where('id', $id)->first()->images;

      //Использовать при создании нового товара!
      //$slug = Str::of('Laravel Framework')->slug('-');
      return view('admin.editproduct', ['product' => $product, 'categories' => $categories, 'collectImage' => $collectImage]);
    }
  }

  public function store(Request $request, $id) {

    //Получаю изображения
    $collectImage = Products::where('id', $id)->first()->images;

    $product = Products::where('id', $id)->first();

    $product->name = $request->nameProduct;
    $product->title = $request->titleProduct;
    $product->description = $request->descriptionProduct;
    $product->compound = $request->compoundProduct;
    $product->prise = $request->priceProduct;
    $product->save();

    //Сохраняю фото на сервер. Конфигурация на лету. Проврку нужно переделывать. 
    if ($request->exampleFormControl != $collectImage->first()) {

      
      //Фото сохраняются в папке размещенной по ссылке public/storage/sushiPhoto
      //Laravel кодируем имя файла
      $path = $request->file('image')->store('sushiPhoto');

      //Если введен новый путь перезаписываю путь в базе изображений
      $image = Image::find($collectImage->first()->id);
      //dd($image->path);
      $image->path = $path;
      $image->save();
    }

    return "store";
  }
  
  public function delete(Request $request, $id) {

    //$product = Products::where('id', $id)->first();
    Products::destroy($id);
    //$product->delete();

    $products = Products::all();
    return view('admin.product', ['products' => $products]);
  }

}
