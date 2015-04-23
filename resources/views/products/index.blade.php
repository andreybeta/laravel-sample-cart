@extends('app')
@section('content')

	<h1>Products</h1>
	<a href="{{url('products/create')}}">New</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $p)
				<tr>
					<td>{{ $p->name }} </td>
					<td>{{ $p->description }} </td>
					<td>{{ $p->price }} </td>
					<td><a href="{{ url('products', $p) }}">Edit</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

@stop
