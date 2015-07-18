@extends('app')

@section('content')
	
	@include('view.slide', ['title'=>'about us'])
	
	@include('view.about')
	
@endsection