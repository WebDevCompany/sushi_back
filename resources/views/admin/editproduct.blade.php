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
                    <form action="/dashboard/product/{{ $product->id }}/save" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <!-- Название товара -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название товара</label>
                                <input type="text" class="form-control" name="nameProduct"
                                    value="{{ $product->name }}">
                            </div>
                            <!-- Слаг товара -->
                            <div class="form-group">
                                <label for="exampleInputPassword1">Slug товара</label>
                                <input type="text" class="form-control" name="slugProduct" value="slug make">
                            </div>
                            <!-- Выбор категории -->
                            <div class="form-group">
                                <label>Категория</label>
                                <select class="form-control" name="category_id">
                                    @foreach ($categories as $category)
                                        @if ($category->id == $product->category_id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <!-- Тайтл товара -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title товара</label>
                                <input type="text" class="form-control" name="titleProduct"
                                    value="{{ $product->title }}">
                            </div>

                            <!-- Дискрипшен -->
                            <div class="form-group">
                                <label>Мета-тег Description</label>
                                <textarea class="form-control" rows="3" name="descriptionProduct">{{ $product->description }}</textarea>
                            </div>

                            <!-- Цена товара -->
                            <div class="form-group">
                                <label for="price">Цена</label>
                                <input type="text" class="form-control" name="priceProduct"
                                    value="{{ $product->prise }}">
                            </div>

                            <!-- Вес товара -->
                            <div class="form-group">
                                <label for="price">Вес набора</label>
                                <input type="text" class="form-control" name="weightProduct"
                                    value="{{ $product->weight }}">
                            </div>

                            <p></p>

                            <!-- Описание товара -->
                            <div class="form-group">
                                <label>Описание товара</label>
                                <textarea class="form-control" rows="3" name="compoundProduct">{{ $product->compound }}</textarea>
                            </div>

                            <!-- Количество кусочков -->
                            <div class="form-group">
                                <label for="price">Количество кусочков</label>
                                <input type="text" class="form-control" name="piecesProduct"
                                    value="{{ $product->pieces }}">
                            </div>

                            <!-- Состояние доступности для заказа -->
                            <div class="form-group">
                                <label for="price">Доступ для заказа. 1 - доступно. 0 - недоступно.</label>
                                <input type="text" class="form-control" name="accessProduct"
                                    value="{{ $product->access }}">
                            </div>

                            <!-- Рекомендованный товар -->
                            <div class="form-group">
                                <label for="price">Рекомендованный товар №1</label>
                                <input type="text" class="form-control" name="recommendedProduct"
                                    value="{{ $product->recommended }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Рекомендованный товар №2</label>
                                <input type="text" class="form-control" name="recommendedProduct"
                                    value="{{ $product->recommended }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Рекомендованный товар №3</label>
                                <input type="text" class="form-control" name="recommendedProduct"
                                    value="{{ $product->recommended }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Рекомендованный товар №4</label>
                                <input type="text" class="form-control" name="recommendedProduct"
                                    value="{{ $product->recommended }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Рекомендованный товар №5</label>
                                <input type="text" class="form-control" name="recommendedProduct"
                                    value="{{ $product->recommended }}">
                            </div>

                            <!-- Фото товара -->
                            <div class="form-group">

                                @foreach ($collectImage as $image)
                                    <label for="exampleInputFile">Фото товара {{ $image->position }}</label>

                                    <div class="col-sm-4">
                                        <div class="position-relative">
                                            <img src="/storage/{{ $image->path }}" alt="{{ $image->path }}"
                                                class="img-fluid">
                                        </div>
                                    </div>

                                    <p></p>

                                    <div class="form-group">
                                        <label for="image">Загрузить другое фото</label>
                                        <input type="file" class="form-control-file" name="image" id="image">
                                    </div>
                                @endforeach

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

                    <form action="/dashboard/product/{{ $product->id }}/delete" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger">Удалить продукт</button>
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
