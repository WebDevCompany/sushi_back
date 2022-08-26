<x-admin-layout>
    <!-- DataTables -->

    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Все товары  </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Наименование</th>
                    <th>Цена</th>
                    <th>Дата создания</th>
                    <th>Правка</th>
                  </tr>
                  </thead>
                  <tbody>
                      
                  @foreach ($products as $productData) 
                  <tr>
                    <td>{{ $productData->id }}</td>
                    <td>{{ $productData->name }}</td>
                    <td>{{ $productData->prise }}</td>
                    <td>{{ $productData->created_at }}</td>
                    <td><a href="/dashboard/product/{{ $productData->id }}">Редактировать</a></td>
                  </tr>
                  @endforeach
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>id</th>
                    <th>Наименование</th>
                    <th>Цена</th>
                    <th>Дата создания</th>
                    <th>Правка</th>
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

