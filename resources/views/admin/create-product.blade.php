@extends('layouts.admin')
@section('admin-content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form">
        <form method="POST">
            <div class="form-group">
                <label>Название</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label>Категория</label>
                <select class="dropdown category">
                @foreach($category as $cat)
                        <option value="{{ $cat->id }}">{{$cat->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Подкатегория</label>
                <select class="dropdown subCategory">
                    @foreach($cat->subcategories as $subcat)
                        <option>{{$subcat->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Описание</label>
                <textarea type="text" class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
                <label>Цена</label>
                <input type="number" class="form-control" name="price"/>
            </div>
            <button type="submit" class="btn btn-default">Создать</button>

            {{csrf_field()}}
        </form>
    </div>
@endsection

@section("admin-footer-script")
    <script>
        $(".category").on("change", function () {
            var e = this;
            $(".subCategory").html("");
            $.get("/category/sub", {cat_id: $(e).val()}, function (data) {
                console.log(data);
                $.each(data, function (i, item) {
                    $('.subCategory').append("<option value='" + item.id + "'>" + item.name + "</option>");
                });
            })

        });
    </script>
@endsection