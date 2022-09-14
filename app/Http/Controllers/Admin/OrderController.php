<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_status;
use App\Models\Promo_code;

use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller {

    public function showAll() {

        $orders = Order::all();
        return view('admin.order.orders', ['orders' => $orders]);

    }

    public function editOrder(Request $request, $id) {

          $orders = Order::where('id', $id)->first();
          $statuses = Order_status::all();

          return view('admin.order.orderEdit', [
              'order' => $orders,
              'status' => $statuses,
          ]);
    }
    //Нужно реализовать сохрание статуса заказа
    public function saveEditOrder(Request $request, $id) {
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



  }
