@extends('layouts.layout')
@section('title')
Edit {{$product->name}}
@stop

@section('body')
  {!!Form::model($product,[
   'method' => 'patch',
   'route' => ['product.update',$product->id]
  ])!!}
  
  {!!Form::label('name','Name')!!}
  {!!Form::text('name',$product -> name,['placeholder' => 'Give a name'])!!}
  {!!Form::label('price','Price')!!}
  {!!Form::text('price',$product -> price,['placeholder' => 'Give price'])!!}

  {!!Form::submit('Edit')!!}
  {!!Form::close()!!}
  
@stop