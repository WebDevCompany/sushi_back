<x-admin-layout>
    <!-- DataTables -->

    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Все категории  </h3>
              </div>

              <div class="card-footer">
                <a class="btn-sm btn-info"  href="/dashboard/addcategory">Добавить категорию</a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Наименование</th>
                    <th>Cтатус</th>
                    <th>Изменить</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach ($category as $category)
                  <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->conditionCategory }}</td>
                    <td><a href="/dashboard/category/{{ $category->id }}">Редактировать</a></td>
                  </tr>
                  @endforeach


                  </tbody>
                  <tfoot>
                  <tr>
                    <th>id</th>
                    <th>Наименование</th>
                    <th>Cтатус</th>
                    <th>Изменить</th>
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

