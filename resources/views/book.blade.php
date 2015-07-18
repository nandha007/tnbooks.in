@extends('app')

@section('content')
	
	@include('view.slide', ['title'=>@$book->book_name])
	
	@include('view.book')
	
@endsection