@extends('layouts.admin')
@section('admin-content')
    @foreach($products as $product)
        <div class="product-small">
            <div class="product-row">
                <div class="product-col-1">
                <div class="img-wrapper">
                    <img src="{!!$product->image_path!!}"/>
                </div>
                </div>
                <div class="product-col-2">
                    <div class="main-info">
                        <div class="name">
                            <span>Название: </span>
                            <span>{!!$product->name!!}</span>
                        </div>
                        <div class="price">
                            <span>Цена: </span>
                            <span>{!!$product->price!!} тг.</span>
                        </div>
                        <div class="description">
                            <span>Описание: </span>
                             <span>{!!$product->description!!}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection