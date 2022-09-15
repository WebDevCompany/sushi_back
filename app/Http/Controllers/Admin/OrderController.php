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
    public function saveOrder(Request $request, $id) {
        //dd($request);
      if ($request->has([
          'order_statuses_id',
          'orderName',
          'orderEmail',
          'orderPhone',
          'orderPayment',
          //'orderBanknote',
          'orderDeliveryTimes',
          //'orderComment',
          'orderDeliveryType',
          'orderStreet',
          'orderHouse',
          'orderFlat',
          'orderEntrance',
          'orderFloor',
          'orderIntercom_code',
          'orderPromo',
          'orderDiscount',
          ])) {

              //Получаю нужный заказ
              $order = Order::where('id', $id)->first();
              //Сохраняю данные
              $order->order_statuses_id = $request->order_statuses_id;
              $order->name = $request->orderName;
              $order->email = $request->orderEmail;
              $order->phone = $request->orderPhone;
              //Нужно делать, возвращается не то
              //$order->payment_type_id = $request->orderPayment;
              $order->banknote_for_change = $request->orderBanknote;
              //$order->order_statuses_id = $request->orderDeliveryTimes;
              $order->order_comment = $request->orderComment;
              //Нужно делать
              //$order->delivery_type_by_time_id = $request->orderDeliveryType;
              $order->street = $request->orderStreet;
              $order->house = $request->orderHouse;
              $order->flat = $request->orderFlat;
              $order->entrance = $request->orderEntrance;
              $order->floor = $request->orderFloor;
              $order->intercom_code = $request->orderIntercom_code;
              //$order->promo_code_id = $request->orderPromo;
              //$order->order_statuses_id = $request->orderDiscount;

              $order->save();


              //Желательно настроить передачу сообщения об успешном сохранении
              return redirect('/dashboard/order/');

      } else {

        return "Не все поля заполнены! Заполните поля и повторите попытку.";
      }
    }



  }
