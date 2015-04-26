@extends('app')
@section('content')

	<h1>Edit Product</h1>
	@include('errors._list')

	{!! Form::model($product, ['method'=>'PATCH', 'action' => ['ProductsController@update', $product]]) !!}
  	@include('products._form', ['submitLabel'=>"Update"])
	{!! Form::close() !!}

@stop
