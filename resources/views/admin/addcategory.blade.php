<x-admin-layout>
    <!-- DataTables -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <!--<div class="card-body">-->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Создать новую категорию</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/dashboard/addcategory/save" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <!-- Название категории -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название категории</label>
                                <input type="text" class="form-control" name="nameCategory">
                            </div>
                            <!-- Тайтл категории -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title категории</label>
                                <input type="text" class="form-control" name="titleCategory">
                            </div>
                            <!-- Дискрипшен категории -->
                            <div class="form-group">
                                <label>Мета-тег Description</label>
                                <textarea class="form-control" rows="3" name="descriptionCategory"></textarea>
                            </div>
                            <!-- Слаг категории
                            <div class="form-group">
                                <label for="exampleInputPassword1">Slug товара</label>
                                <input type="text" class="form-control" name="slugProduct" value="slug make">
                            </div> -->

                            <p></p>

                            <!-- Описание категории -->
                            <div class="form-group">
                                <label>Описание категории</label>
                                <textarea class="form-control" rows="3" name="category_descriptionCategory"></textarea>
                            </div>

                            <!-- Статус категории -->
                            <div class="form-group">
                                <label for="condition">Публикация. 1 - опубликовано. 0 - неопубликовано.</label>
                                <input type="text" class="form-control" name="conditionCategory">
                            </div>

                            <!-- Лейбел категории -->
                            <div class="form-group">
                                <label for="id_label">Лейбл</label>
                                <input type="text" class="form-control" name="id_labelCategory">
                            </div>

                            <!-- Фото товара -->
                            <div class="form-group">
                                    <label for="exampleInputFile">Фото</label>
                                    <p></p>
                                    <div class="form-group">
                                        <label for="image">Загрузить фото</label>
                                        <input type="file" class="form-control-file" name="image" id="image">
                                    </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>

                        <div class="card-footer">
                            <a class="btn btn-danger" href="/dashboard/category/">Отменить</a>
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
