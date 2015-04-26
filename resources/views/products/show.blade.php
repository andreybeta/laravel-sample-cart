@extends('app')
@section('content')

	<h1>Product {{$product->name}}</h1>
	<p>{{$product->description}}</p>
	<b>Price:</b> {{$product->price}} <br>
	<b>Category:</b> {{$product->category->name}}

	<br/>
	<a href="{{url('products')}}" class="btn btn-primary">Back</a>

@stop
