@extends('layouts.layout')
@section('title')
	Create new Product
@stop
@section('body')
	{!!Form::open(['route' => 'product.store'])!!}
    {!!Form::label('name','Name')!!}
    {!!Form::text('name',null,['placeholder' => 'Give a name'])!!}
    {!!Form::label('price','Price')!!}
    {!!Form::text('price','50$',['placeholder' => 'Give price'])!!}

    {!!Form::submit('Create')!!}
	{!!Form::close()!!}
@stop	