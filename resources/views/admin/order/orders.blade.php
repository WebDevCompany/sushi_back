<x-admin-layout>
    <!-- DataTables -->

    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Заказы</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Номер заказа</th>
                    <th>Дата</th>
                    <th>Имя закзачика</th>
                    <th>Статус</th>
                    <th>Редактировать</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach ($orders as $order)
                  <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->order_status->name }}</td>
                    <td><a href="/dashboard/order/{{ $order->id }}">Редактировать</a></td>
                  </tr>
                  @endforeach


                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Номер заказа</th>
                    <th>Дата</th>
                    <th>Имя закзачика</th>
                    <th>Статус</th>
                    <th>Редактировать</th>
                  </tr>
                  </tfoot>
                </table>
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

