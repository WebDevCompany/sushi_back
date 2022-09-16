<x-admin-layout>
    <!-- DataTables -->
     <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <!--<div class="card-body">-->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Форма редактирования Заказа</h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/dashboard/order/{{ $order->id }}/save" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="row">
                                <!-- Имя заказчика -->
                                <div class="col-4">
                                    <label for="exampleInputEmail1">Имя</label>
                                    <input type="text" class="form-control" name="orderName"
                                        value="{{ $order->name }}">
                                </div>
                                <!-- Телефон заказчика -->
                                <div class="col-4">
                                    <label for="exampleInputPassword1">Телефон</label>
                                    <input type="text" class="form-control" name="orderPhone" value="{{ $order->phone }}">
                                </div>
                                <!-- Email -->
                                <div class="col-4">
                                    <label for="price">E-mail</label>
                                    <input type="text" class="form-control" name="orderEmail" value="{{ $order->email }}">
                                </div>
                            </div>
                            <br>

                            <div class="row">


                                <!-- Форма оплаты -->
                                <div class="col-4">
                                    <label>Форма оплаты</label>
                                    <select class="form-control" name="orderPayment">
                                        @foreach ($orderPayment as $orderPayment)
                                            @if ($orderPayment->id == $order->payment_type_id)
                                                <option value="{{ $orderPayment->id }}" selected>{{ $orderPayment->name }}</option>
                                            @else
                                                <option value="{{ $orderPayment->id }}">{{$orderPayment->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>


                                <!-- Подготовить сдачу с купюры: -->
                                <div class="col-4">
                                    <label for="exampleInputEmail1">Подготовить сдачу с купюры:</label>
                                <input type="text" class="form-control" name="orderBanknote" value="{{ $order->banknote_for_change }}">
                                </div>

                                <!-- Тип доставки по времениа -->
                                <div class="col-4">
                                    <label>Тип доставки по времени</label>
                                    <select class="form-control" name="deliveryTypeTime">
                                        @foreach ($delivery_type_by_time as $deliveryTypeTime)
                                            @if ($deliveryTypeTime->id == $order->delivery_type_by_time_id)
                                                <option value="{{ $deliveryTypeTime->id }}" selected>{{ $deliveryTypeTime->name }}</option>
                                            @else
                                                <option value="{{ $deliveryTypeTime->id }}">{{$deliveryTypeTime->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>


                            </div>
                            <br>
                            <!-- Комментарий к заказу -->
                            <div class="form-group">
                                <label for="price">Комментарий к заказу</label>
                                <input type="text" class="form-control" name="orderComment" value="{{ $order->order_comment }}">
                            </div>



                            <div class="row">
                                <!-- Способ доставки -->
                                <div class="col-2">
                                    <label for="price">Способ доставки</label>
                                <input type="text" class="form-control" name="orderDeliveryType" value="{{ $order->delivery_type->name }}">

                                </div>
                                <!-- Адрес доставки -->
                                <!-- Улица -->
                                <div class="col-3">
                                    <label for="price">Улица</label>
                                <input type="text" class="form-control" name="orderStreet" value="{{ $order->street }}">
                                </div>
                                <!-- Дом -->
                                <div class="col-1">
                                    <label for="price">Дом</label>
                                <input type="text" class="form-control" name="orderHouse" value="{{ $order->house }}">
                                </div>
                                <!-- Квартира -->
                                <div class="col-1">
                                    <label for="price">Квартира</label>
                                <input type="text" class="form-control" name="orderFlat" value="{{ $order->flat }}">
                                </div>
                                <!-- Подъезд -->
                                <div class="col-1">
                                    <label for="price">Подъезд</label>
                                    <input type="text" class="form-control" name="orderEntrance" value="{{ $order->entrance }}">
                                </div>
                                <!-- Этаж -->
                                <div class="col-2">
                                    <label for="price">Этаж</label>
                                    <input type="text" class="form-control" name="orderFloor" value="{{ $order->floor }}">
                                </div>
                                <!-- Код домофона -->
                                <div class="col-2">
                                    <label for="price">Код домофона</label>
                                    <input type="text" class="form-control" name="orderIntercom_code" value="{{ $order->intercom_code }}">
                                </div>
                            </div>
                            <div class="row">
                                <!-- Промокод номер -->
                                <div class="col-4">
                                    <label for="price">Промокод номер</label>
                                    <input type="text" class="form-control" name="orderPromo" value="{{ $order->promo_code->name }}">

                                </div>
                                <!-- Скидка по промокоду -->
                                <div class="col-4">
                                    <label for="price">Скидка</label>
                                <input type="text" class="form-control" name="orderDiscount" value="{{ $order->promo_code->discount }}">
                                </div>

                                <!-- Cтатус заказа -->
                                <div class="col-4">
                                    <label>Статус заказа</label>
                                    <select class="form-control" name="order_statuses_id">
                                        @foreach ($status as $status_elem)
                                            @if ($status_elem->id == $order->order_status->id)
                                                <option value="{{ $status_elem->id }}" selected>{{ $status_elem->name }}</option>
                                            @else
                                                <option value="{{ $status_elem->id }}">{{ $status_elem->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <br>

                            <!-- Вывод таблицы заказов -->
                            <div class="col-12">
                                <div class="card">
                                  <div class="card-header">
                                    <h3 class="card-title">Заказ № {{ $order->id }}</h3>
                                  </div>

                                  <!-- /.card-header -->
                                  <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                      <thead>
                                      <tr>
                                        <th>Номер заказа</th>
                                        <th>Код товара</th>
                                        <th>Количество</th>
                                        <th>Цена 1 ед.</th>
                                        <th>Сумма</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      @php
                                      $sum = 0;
                                      @endphp

                                      @foreach ($order->purchase as $purchase)
                                      <tr>
                                        <td>{{ $purchase->orders_id }}</td>
                                        <td>{{ $purchase->products->name }}</td>
                                        <td>{{ $purchase->amount }}</td>
                                        <td>{{ $purchase->price_per_piece }}</td>
                                        <td>{{ $purchase->price_per_piece * $purchase->amount }}</td>
                                        @php
                                         $sum += $purchase->price_per_piece * $purchase->amount
                                        @endphp
                                      </tr>
                                      @endforeach
                                      </tbody>
                                    </table>
                                    @php
                                    $discount = $order->promo_code->discount;
                                    echo '<p align=\'right\'>'."Общая сумма без скидки: ".$sum." COM"."</p>";
                                    echo '<p align=\'right\'>'."Скидка: ".$discount."% или: ".(int)$sum * ($discount / 100)."COM"."</p>";
                                    echo '<p align=\'right\'>'."Сумма с учетом скидки: ".(int)$sum - ((int)$sum * ($discount / 100))." COM"."</p>";
                                    @endphp

                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>

                        <div class="card-footer">
                            <a class="btn btn-danger" href="/dashboard/order/">Отменить</a>
                        </div>

                    </form>


                </div>
                <!-- /.card -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
        </section>
        <!-- right col -->
    </div>
</x-admin-layout>
