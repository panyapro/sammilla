
@extends('layouts.main')
@section('content')
<ul class="dropdown">
    @foreach($products as $product)
    <li>
        <a class="links" href="{{ route('productShow',['productId'=>$product->id]) }}">{!!$product->name!!}</a>
        <form action="{{route('productDelete', ['productId'=>$product->id])}}" method="post" style="display: inline">

            {{ method_field('DELETE') }}
            {{ csrf_field() }}

            <button type="submit" class="btn btn-danger" >
                Delete
            </button>
        </form>
    </li>
    @endforeach
</ul>
@endsection