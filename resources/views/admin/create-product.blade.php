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
        <form method="POST" action="{{route('productStore')}}">
            <div class="form-group">
                <label>Название</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label>Категория</label>
                <select class="dropdown">
                @foreach($category as $cat)
                        <option>{{$cat->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Подкатегория</label>
                <select class="dropdown">
                    @foreach($category as $cat)
                        @foreach($cat->subcategories->limit(10) as $subcat)
                            <option>{{$subcat->name}}</option>
                        @endforeach
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