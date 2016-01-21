@extends('layouts.layout')
@section('title')
	About The Page
@stop	
@section('body')
	<h1>This is about page</h1>
	<p>{{$companyname}}</p>
	@if($isuserregistered == true)
		hello mate
	@else
	 	you should register<br>
	@endif
    
	@foreach($users as $data)
		{{$data}}<br>
	@endforeach		 
@stop