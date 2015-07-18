<div class="col-md-3 col-sm-4 col-xs-12">
	<div class="thumbnail">
		<div class="caption-img" style="background: url(' {{ URL($book->download_link) }}');"></div>
		<div class="caption-details">
			<h3>{{ $book->book_name }}</h3>
			<span class="price">&#8377;{{ $book->rate }}</span>
		</div>
		<a href="{{ route('book', [$book->book_slug]) }}"><div class="caption-link"></div></a>
	</div>
</div>