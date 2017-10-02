@extends('layouts.main')
@section('content')


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
            <input type="text" class="form-control" name="categoryId"/>
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