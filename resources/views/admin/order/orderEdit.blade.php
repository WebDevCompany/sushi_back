<x-admin-layout>
    <!-- DataTables -->
     <!-- /.row -->
     <div class="row">
        <!-- Left col -->
        <section class="col-lg-5 connectedSortable">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-7 connectedSortable">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        </section>
        <!-- right col -->
    </div>
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
                            <!-- Имя заказчика -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Имя заказчика</label>
                                <input type="text" class="form-control" name="orderName"
                                    value="{{ $order->name }}">
                            </div>
                            <!-- Телефон заказчика -->
                            <div class="form-group">
                                <label for="exampleInputPassword1">Телефон заказчика</label>
                                <input type="text" class="form-control" name="orderPhone" value="{{ $order->phone }}">
                            </div>

                            <!-- Форма оплаты -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Форма оплаты</label>
                                <input type="text" class="form-control" name="orderPayment" value="{{ $order->payment_type->name }}">
                            </div>

                            <!-- Подготовить сдачу с купюры: -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Подготовить сдачу с купюры:</label>
                                <input type="text" class="form-control" name="orderBanknote" value="{{ $order->payment_type->banknote_for_change }}">
                            </div>

                            <!-- Комментарий к заказу -->
                            <div class="form-group">
                                <label for="price">Комментарий к заказу</label>
                                <input type="text" class="form-control" name="orderComment" value="{{ $order->order_comment }}">
                            </div>

                            <!-- Промокод номер -->
                            <div class="form-group">
                                <label for="price">Промокод номер</label>
                                <input type="text" class="form-control" name="orderPromo" value="{{ $order->promo_code->name }}">
                            </div>

                            <!-- Скидка по промокоду -->
                            <div class="form-group">
                                <label for="price">Скидка по промокоду</label>
                                <input type="text" class="form-control" name="orderDiscount" value="{{ $order->promo_code->discount }}">
                            </div>

                            <!-- Способ доставки -->
                             <div class="form-group">
                                <label for="price">Способ доставки</label>
                                <input type="text" class="form-control" name="orderDeliveryType" value="{{ $order->delivery_type->name }}">
                            </div>

                            <!-- Адрес доставки -->
                            <!-- Улица -->
                            <div class="form-group">
                                <label for="price">Улица</label>
                                <input type="text" class="form-control" name="orderStreet" value="{{ $order->street }}">
                            </div>
                            <!-- Дом -->
                            <div class="form-group">
                                <label for="price">Дом</label>
                                <input type="text" class="form-control" name="orderHouse" value="{{ $order->house }}">
                            </div>
                            <!-- Квартира -->
                            <div class="form-group">
                                <label for="price">Квартира</label>
                                <input type="text" class="form-control" name="orderFlat" value="{{ $order->flat }}">
                            </div>
                            <!-- Подъезд -->
                            <div class="form-group">
                                <label for="price">Подъезд</label>
                                <input type="text" class="form-control" name="orderEntrance" value="{{ $order->entrance }}">
                            </div>
                            <!-- Этаж -->
                            <div class="form-group">
                                <label for="price">Этаж</label>
                                <input type="text" class="form-control" name="orderFloor" value="{{ $order->floor }}">
                            </div>
                            <!-- Код домофона -->
                            <div class="form-group">
                                <label for="price">Код домофона</label>
                                <input type="text" class="form-control" name="orderIntercom_code" value="{{ $order->intercom_code }}">
                            </div>

                            <!-- Тип доставки по времени -->
                            <div class="form-group">
                                <label for="price">Тип доставки по времени</label>
                                <input type="text" class="form-control" name="orderDeliveryTimes" value="{{ $order->delivery_type_by_time->name }}">
                            </div>

                            <!-- E-mail -->
                            <div class="form-group">
                                <label for="price">E-mail</label>
                                <input type="text" class="form-control" name="orderEmail" value="{{ $order->email }}">
                            </div>

                            <p>Бланк заказа.</p>

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
                                    echo "Общая сумма без скидки: ".$sum." COM"."<br>";
                                    echo "Скидка: "."5% или: ".(int)$sum * (5 / 100)."COM"."<br>";
                                    echo "Сумма с учетом скидки: ".(int)$sum - ((int)$sum * (5 / 100))." COM"."<br>";
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
                            <a class="btn btn-danger" href="/dashboard/product/">Отменить</a>
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
