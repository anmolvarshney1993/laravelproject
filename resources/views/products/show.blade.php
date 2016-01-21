@extends('layouts.layout')
@section('title')
{{$product->name}}
@stop

@section('body')
  {!!Form::open([
   'method' => 'delete',
   'route' => ['product.destroy',$product->id]
  ])!!}
  <h1>{{$product->name}}</h1>
  <h1>{{$product->price}}</h1>
  <a href="#">Edit</a><br>
  {!!Form::submit('Delete')!!}
  {!!Form::close()!!}
  <!-- <a href="{{route('product.destroy',$product->id)}}">Delete</a> -->
@stop