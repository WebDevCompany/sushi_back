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
                    <form action="/dashboard/category/{{ $category->id }}/save" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <!-- Название категории -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название категории</label>
                                <input type="text" class="form-control" name="nameCategory"
                                    value="{{ $category->name }}">
                            </div>
                            <!-- Тайтл категории -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title категории</label>
                                <input type="text" class="form-control" name="titleCategory" value="{{ $category->title }}">
                            </div>
                            <!-- Дискрипшен категории -->
                            <div class="form-group">
                                <label>Мета-тег Description</label>
                                <textarea class="form-control" rows="3" name="descriptionCategory">{{ $category->description }}</textarea>
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
                                <textarea class="form-control" rows="3" name="category_descriptionCategory">{{ $category->category_description }}</textarea>
                            </div>

                            <!-- Статус категории -->
                            <div class="form-group">
                                <label for="condition">Публикация. 1 - опубликовано. 0 - неопубликовано.</label>
                                <input type="text" class="form-control" name="conditionCategory"
                                value="{{ $category->condition }}">
                            </div>

                            <!-- Лейбел категории -->
                            <div class="form-group">
                                <label for="id_label">Лейбл</label>
                                <input type="text" class="form-control" name="id_labelCategory"
                                value="{{ $category->id_label }}">
                            </div>

                            <!-- Фото товара -->
                            <div class="form-group">


                                    <label for="exampleInputFile">Фото</label>

                                    <div class="col-sm-4">
                                        <div class="position-relative">
                                            <img src="/storage/{{ $category->image_path }}" alt="{{ $category->image_path }}"
                                                class="img-fluid">
                                        </div>
                                    </div>

                                    <p></p>

                                    <div class="form-group">
                                        <label for="image">Загрузить другое фото</label>
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

                    <form action="/dashboard/category/{{ $category->id }}/delete" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger">Удалить категорию</button>
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
