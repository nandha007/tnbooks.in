<div class="row">
	<div class="col-md-4 col-sm-4">
		<img src="{{ asset($book->download_link) }}" class="img-responsive img-rounded" alt="dodolan manuk catalog template">
	</div>
	<div class="col-md-8 col-sm-8">
		<h3>{{ @$book->book_name }}</h3>
		<h5>Author: <b>{{ @$book->author }}</b></h5>
		<h5>Publication: <b>{{ @$book->publication }}</b></h5>
		<h5>Book Type: <b>{{ @$book->book_type->book_type }}</b></h5>
		<h5>Category: <b>{{ @$book->category->category_name }}</b></h5>
		<h5>Rate: &#8377;<b>{{ @$book->rate }}</b></h5>
		<h5>Discount: &#8377;<b>{{ @$book->discount }}</b></h5>
		<h5>Discount Qty: <b>{{ @$book->discount_qty }}</b></h5>
		<p>{{ @$book->description }}</p>
	</div>
</div>