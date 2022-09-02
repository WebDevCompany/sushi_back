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
        $collectImage = Products::where('id', $id)->first()->images;

        return view('admin.editproduct', [
            'product' => $product,
            'categories' => $categories,
            'collectImage' => $collectImage,
        ]);
    }
  }

  public function editStore(Request $request, $id) {
    if ($request->has([
        'nameProduct',
        'slugProduct',
        'category_id',
        'titleProduct',
        'descriptionProduct',
        'priceProduct',
        'weightProduct',
        'compoundProduct',
        'piecesProduct',
        'accessProduct',
        ])) {

            //Получаю изображения
            $collectImage = Products::where('id', $id)->first()->images;
            //Получаю продукт
            $product = Products::where('id', $id)->first();
            //Сохраняю данные
            $product->name = $request->nameProduct;
            $product->title = $request->titleProduct;
            $product->slug = $request->slugProduct;
            $product->description = $request->descriptionProduct;
            $product->compound = $request->compoundProduct;
            $product->prise = $request->priceProduct;
            $product->category_id = $request->category_id;
            $product->save();

            //Сохраняю фото на сервер. Без проверки, старое остается без привязки. Если нет фото сохранять заглушку.
            //Фото сохраняются в папке размещенной по ссылке public/storage/sushiPhoto
            //Laravel кодирует имя файла.
            if (!empty($request->file('image'))) {
                $path = $request->file('image')->store('sushiPhoto');
                //Если введен новый путь перезаписываю путь в базе изображений
                $image = Image::find($collectImage->first()->id);
                $image->path = $path;
                $image->save();
            }
            //Желательно настроить передачу сообщения об успешном сохранении
            //Перенаправляю на страницу с продуктами
            return redirect('/dashboard/product/');

    } else {

      return "Не все поля заполнены! Заполните поля и повторите попытку.";
    }
  }

  public function add() {
    $categories = Categories::all();
    return view('admin.addproduct', ['categories' => $categories]);
  }

  public function addSave(Request $request) {
    //dd($request);
    if ($request->has([
        'nameProduct',
        'slugProduct',
        'category_id',
        'titleProduct',
        'descriptionProduct',
        'priceProduct',
        'weightProduct',
        'compoundProduct',
        'piecesProduct',
        'accessProduct',
        ])) {

      $product = new Products;

      $product->name = $request->nameProduct;
      $product->slug = $request->slugProduct;
      $product->category_id = $request->category_id;
      $product->title = $request->titleProduct;
      $product->description = $request->descriptionProduct;
      $product->prise = $request->priceProduct;
      $product->weight = $request->weightProduct;
      $product->compound = $request->compoundProduct;
      $product->number_of_pieces = $request->piecesProduct;
      $product->access_to_order = $request->accessProduct;
      $product->recommended_product_id = 1;

      //Формирю ЧПУ урл. Если слаг определен или создаю его.
      $product->slug = Str::of($request->nameProduct)->slug('-');
      //if (!empty($request->slug)) {
      //$product->slug = $request->slug;
      //} else {
      //$product->slug = Str::of($request->nameProduct)->slug('-');
      //}

      $product->save();

      //Вычисляю id следующего продукта, чтобы записать данные в таблицу изображений
      //$newId = Products::where('id')->max()->id;
      //dd($newId);
      $newId = Products::max('id');
      $image = new Image;
      $path = $request->file('image')->store('sushiPhoto');
      $image->path = $path;
      $image->products_id = $newId;
      $image->position = 1;
      $image->save();

      return "stored success";
    }
  }

  public function delete(Request $request, $id) {

    Products::destroy($id);

    $products = Products::all();
    return view('admin.product', ['products' => $products]);
  }

}
