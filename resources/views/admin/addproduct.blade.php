<x-admin-layout>
    <!-- DataTables -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <!--<div class="card-body">-->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Форма добавления товара</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/dashboard/addproduct/save" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <!-- Название товара -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название товара</label>
                                <input type="text" class="form-control" name="nameProduct">
                            </div>
                            <!-- Слаг товара -->
                            <div class="form-group">
                                <label for="exampleInputPassword1">Slug товара</label>
                                <input type="text" class="form-control" name="slugProduct">
                            </div>
                            <!-- Выбор категории -->
                            <div class="form-group">
                                <label>Категория</label>
                                <select class="form-control" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Тайтл товара -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title товара</label>
                                <input type="text" class="form-control" name="titleProduct">
                            </div>
                            <!-- Дескрипшен -->
                            <div class="form-group">
                                <label>Мета-тег Description</label>
                                <textarea class="form-control" rows="3" name="descriptionProduct"></textarea>
                            </div>
                            <!-- Цена товара -->
                            <div class="form-group">
                                <label for="price">Цена</label>
                                <input type="text" class="form-control" name="priceProduct">
                            </div>
                            <!-- Вес товара -->
                            <div class="form-group">
                                <label for="price">Вес набора</label>
                                <input type="text" class="form-control" name="weightProduct">
                            </div>

                            <p></p>

                            <!-- Описание товара -->
                            <div class="form-group">
                                <label>Описание товара</label>
                                <textarea class="form-control" rows="3" name="compoundProduct"></textarea>
                            </div>

                            <!-- Количество кусочков -->
                            <div class="form-group">
                                <label for="piecesProduct">Количество кусочков</label>
                                <input type="text" class="form-control" name="piecesProduct">
                            </div>

                            <!-- Состояние доступности для заказа -->
                            <div class="form-group">
                                <label for="accessProduct">Доступ для заказа. 1 - доступно. 0 - недоступно.</label>
                                <input type="text" class="form-control" name="accessProduct">
                            </div>

                            <!-- ID рекомендованных товаров -->
                            <div class="form-group">
                                <label for="price">Рекомендованный товар №1</label>
                                <input type="text" class="form-control" name="recommendedProduct">
                            </div>
                            <!-- Фото товара -->
                            <div class="form-group">
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
