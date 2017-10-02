@extends('layouts.main')
@section('content')
@if($product)
{{$product->price}}
@endif
@endsection