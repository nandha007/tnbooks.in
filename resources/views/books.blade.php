@extends('app')

@section('content')
	
	@include('view.slide', ['title'=>'Books'])
	

	<div class="page-content">

		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">
					  <li><a href="{{ route('index') }}">Home</a></li>
					  <li class="active">Books</li>
					</ol>
				</div>
			</div>

			<div id="catalogue">
				<div class="container">
					<div class="row">
						@if (count($books))
						    @foreach ($books as $book)
						        @include('view.partials.slide_book', $book)
						    @endforeach
						@endif
					</div>
				</div>
			</div>	
		</div>		
	</div>
	
@endsection