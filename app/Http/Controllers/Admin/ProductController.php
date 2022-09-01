<?php

namespace App\Http\Controllers\Admin;

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

  public function show($id = 0) {
    if ($id == 0) {
      $products = Products::all();
      return view('admin.product', ['products' => $products]);
    } else {
      $product = Products::where('id', $id)->first();

      $categories = Categories::all();
      //$image = Products::where('id', $id)->first()->product;
      $collectImage = Products::where('id', $id)->first()->images;


      return view('admin.editproduct', ['product' => $product, 'categories' => $categories, 'collectImage' => $collectImage]);
    }
  }

  public function store(Request $request, $id) {

    //Получаю изображения
    $collectImage = Products::where('id', $id)->first()->images;

    $product = Products::where('id', $id)->first();

    $product->name = $request->nameProduct;
    $product->title = $request->titleProduct;
    //Нет поля в базе
    //$product->slug = $request->slugProduct;
    $product->description = $request->descriptionProduct;
    $product->compound = $request->compoundProduct;
    $product->prise = $request->priceProduct;
    $product->save();

    //Сохраняю фото на сервер. Без проверки, старое остается без привязки.
    //Фото сохраняются в папке размещенной по ссылке public/storage/sushiPhoto
    //Laravel кодируем имя файла.
    $path = $request->file('image')->store('sushiPhoto');

    //Если введен новый путь перезаписываю путь в базе изображений
    $image = Image::find($collectImage->first()->id);

    $image->path = $path;
    $image->save();


    //Желательно настроить передачу сообщения об успешном сохранении
    //Перенаправляю на страницу с продуктами
    return redirect('/dashboard/product/');
  }


  public function add() {

        $categories = Categories::all();
        return view('admin.addproduct', ['categories' => $categories]);
  }

  public function addSave(Request $request) {
    //dd($request);
    if ($request->has(['nameProduct', 'descriptionProduct'])) {

        $product = new Products;

        $product->name = $request->nameProduct;
        $product->title = $request->titleProduct;
        $product->description = $request->descriptionProduct;
        //Описание
        $product->compound = $request->compoundProduct;
        $product->prise = $request->priceProduct;
        $product->weight = 100;
        $product->number_of_pieces = 32;
        $product->access_to_order = 1;
        $product->recommended_product_id = 1;
        //Формирю ЧПУ урл. Если слаг определен или создаю его.
        $product->slug = Str::of($request->nameProduct)->slug('-');
        //if (!empty($request->slug)) {
          //$product->slug = $request->slug;
        //} else {
            $product->slug = Str::of($request->nameProduct)->slug('-');
        //}


        $product->save();

        return "stored success";
    }

  }

  public function delete(Request $request, $id) {

    //$product = Products::where('id', $id)->first();
    Products::destroy($id);
    //$product->delete();

    $products = Products::all();
    return view('admin.product', ['products' => $products]);
  }

}
