<!-- begin:content -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
				  <li><a href="{{ route('index') }}">Home</a></li>
				  <li><a href="{{ route('books') }}">Books</a></li>
				  <li class="active">{{ @$book->book_name }}</li>
				</ol>
			</div>
		</div>
		
		@include('view.partials.page_book')

	</div>
</div>
<!-- end:content -->