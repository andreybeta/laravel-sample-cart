@extends('app')
@section('content')

	<h1>New Product</h1>
	@include('errors._list')

	{!! Form::open(['url' => 'products']) !!}
		@include('products._form', ['submitLabel'=>"Save"])
	{!! Form::close() !!}

@stop
