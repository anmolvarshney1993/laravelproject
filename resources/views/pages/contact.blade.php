@extends('layouts.layout')
@section('title')
	Contact Us
@stop
@section('body')
	<h1>This is the contact page</h1>
	<input type="text">
	{!!Form::text('price', '50$',[
         'class' => 'form-control',
         'placeholder' => 'give a price'
	])!!}
	{!!Form::number('label',10)!!}
	{!! Form::open(array('url' => 'foo/bar')) !!}
      
	{!! Form::close() !!}
@stop		