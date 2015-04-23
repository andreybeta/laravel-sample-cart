@extends('app')
@section('content')

	<h1>New Product</h1>

	{!! Form::open(['url' => 'products']) !!}
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="form-group">
          {!! Form::label('name', 'Name:') !!}
          {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="form-group">
          {!! Form::label('price', 'Price:') !!}
          <div class="input-group">
            <span class="input-group-addon">$</span>
            <!-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> -->
            {!! Form::input('number','price', null, ['class' => 'form-control currency', 'aria-label' => "Amount (to the nearest dollar)"]) !!}
            <span class="input-group-addon">.00</span>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      {!! Form::label('description', 'Description:') !!}
      {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Add product', ['class' => 'btn btn-primary']) !!}
    </div>

	{!! Form::close() !!}
  
  @foreach($errors->all() as $e)
    - {{$e}} <br>
  @endforeach

@stop
