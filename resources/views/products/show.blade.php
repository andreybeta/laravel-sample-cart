@extends('app')
@section('content')

	<h1>Product {{$product->name}}</h1>
	<p>{{$product->description}}</p>
	<b>Price</b> {{$product->price}}

	<br/>
	<a href="{{url('products')}}">Back</a>

@stop
