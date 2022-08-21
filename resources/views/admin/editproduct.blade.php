<x-admin-layout>
    <!-- DataTables -->



    <div class="row">
        <div class="col-12">
            <div class="card">

                <!-- /.card-header -->
                <!--<div class="card-body">-->
                <div class="card card-success">    
                    <div class="card-header">
                        <h3 class="card-title">Форма редактирования товара</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название товара</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите название товара">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title товара</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите название товара">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Slug товара</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            
                            <p></p>

                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Мета-тег Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                                
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Описание товара</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                                
                                <!-- select -->
                      <div class="form-group">
                        <label>Категория</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                            
                            <div class="form-group">


                                <label for="exampleInputFile">Фото товара №1</label>

                                <div class="col-sm-4">
                                    <div class="position-relative">
                                        <img src="{{ URL::asset('admin/dist/img/photo1.png') }}" alt="Photo 1" class="img-fluid">
                                    </div>
                                </div>

                                <p></p>

                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                
                                

                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-secondary">Сохранить</button>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger">Отменить</button>
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

