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

class CategoryController extends Controller {

    public function show($id = 0) {
      if ($id == 0) {
        //Если нет id показываю все категории
        $category = Categories::all();
        return view('admin.categories', ['categories' => $category]);

        } else {
          //Если есть id, показываю категорию для редактирования
          $category = Categories::where('id', $id)->first();

          return view('admin.editcategory', [
              'categories' => $category,
          ]);
      }
    }

    public function editStore(Request $request, $id) {
      if ($request->has([
          'nameCategory' != null,
          'image_pathCategory' != null,
          'titleCategory' != null,
          'descriptionCategory' != null,
          'category_descriptionDescription' != null,
          'conditionCategory' != null,
          'id_labelCategory' != null,
          ])) {

              //Получаю продукт
              $category = Categories::where('id', $id)->first();
              //Сохраняю данные
              $category->name = $request->nameCategory;
              $category->image_path = $request->slugPimage_pathCategoryroduct;
              $category->title = $request->titleCategory;
              $category->title = $request->descriptionCategory;
              $category->description = $request->category_descriptionDescription;
              $category->category_description = $request->conditionCategory;
              $category->condition = $request->weigid_labelCategoryhtProduct;

              $category->save();

              //Сохраняю фото на сервер. Без проверки, старое остается без привязки. Если нет фото сохранять заглушку.
              //Фото сохраняются в папке размещенной по ссылке public/storage/sushiPhoto
              //Laravel кодирует имя файла.

              //Блок нужно адаптировать для категории!!!

              if (!empty($request->file('image'))) {
                  $path = $request->file('image')->store('sushiPhoto');
                  //Если введен новый путь перезаписываю путь в базе изображений
                  $image = Image::find($collectImage->first()->id);
                  $image->path = $path;
                  $image->save();
              }
              //Желательно настроить передачу сообщения об успешном сохранении
              //Перенаправляю на страницу с продуктами
              return redirect('/dashboard/category/');

      } else {

        return "Не все поля заполнены! Заполните поля и повторите попытку.";
      }
    }





    public function delete(Request $request, $id) {

      Products::destroy($id);

      $products = Products::all();
      return view('admin.product', ['products' => $products]);
    }

  }
