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

    public function show() {

        $category = Categories::all();
        return view('admin.category.show', ['category' => $category]);

    }

    public function edit(Request $request, $id) {
          //Если есть id, показываю категорию для редактирования
          $category = Categories::where('id', $id)->first();

          return view('admin.category.edit', [
              'category' => $category,
          ]);
    }

    public function editSaveCategory(Request $request, $id) {
        //dd($request);
      if ($request->has([
          'nameCategory',
          'titleCategory',
          'descriptionCategory',
          'category_descriptionCategory',
          'conditionCategory',
          'id_labelCategory',
          ])) {

              //Получаю продукт
              $category = Categories::where('id', $id)->first();
              //Сохраняю данные
              $category->name = $request->nameCategory;

              //Сохраняю фото на сервер. Без проверки, старое остается без привязки. Если нет фото сохранять заглушку.
              //Фото сохраняются в папке размещенной по ссылке public/storage/sushiPhoto
              //Laravel кодирует имя файла.
              if (!empty($request->file('image'))) {
                  $path = $request->file('image')->store('sushiPhoto');
                  //Если введен новый путь перезаписываю путь в базе изображений

                  $category->image_path = $path;
              }

              $category->title = $request->titleCategory;
              $category->description = $request->descriptionCategory;
              $category->category_description = $request->category_descriptionCategory;
              $category->condition = $request->conditionCategory;
              $category->id_label = $request->id_labelCategory;

              $category->save();


              //Желательно настроить передачу сообщения об успешном сохранении
              //Перенаправляю на страницу с продуктами
              return redirect('/dashboard/category/');

      } else {

        return "Не все поля заполнены! Заполните поля и повторите попытку.";
      }
    }

    public function delete(Request $request, $id) {

      Categories::destroy($id);

      $category = Categories::all();
      return view('admin.allcategory', ['category' => $category]);
    }

    public function addCategory() {

        return view('admin.addcategory');
    }


    public function saveAddCategory(Request $request) {
        //dd($request);
      if ($request->has([
          'nameCategory',
          'titleCategory',
          'descriptionCategory',
          'category_descriptionCategory',
          'conditionCategory',
          'id_labelCategory',
          ])) {

              //Получаю продукт
              $category = new Categories;
              //Сохраняю данные
              $category->name = $request->nameCategory;

              //Сохраняю фото на сервер. Без проверки, старое остается без привязки. Если нет фото сохранять заглушку.
              //Фото сохраняются в папке размещенной по ссылке public/storage/sushiPhoto
              //Laravel кодирует имя файла.
              //if (!empty($request->file('image'))) {
              $path = $request->file('image')->store('sushiPhoto');
                  //Если введен новый путь перезаписываю путь в базе изображений

              $category->image_path = $path;
              //}

              $category->title = $request->titleCategory;
              $category->description = $request->descriptionCategory;
              $category->category_description = $request->category_descriptionCategory;
              $category->condition = $request->conditionCategory;
              $category->id_label = $request->id_labelCategory;

              $category->save();


              //Желательно настроить передачу сообщения об успешном сохранении
              //Перенаправляю на страницу с продуктами
              return redirect('/dashboard/category/');

      } else {

        return "Не все поля заполнены! Заполните поля и повторите попытку.";
      }
    }

  }
