<!-- begin:catalogue -->
<div id="catalogue">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-title">
					<h2>New Addition to Our self</h2>
					<!-- <p>The best of the best item most wanted in 2013</p> -->
				</div>	
			</div>
		</div>
		<div class="row">
			@if (count($books))
			    @foreach ($books as $book)
			        @include('view.partials.slide_book', $book)
			    @endforeach
			@endif
		</div>
	</div>
</div>
<!-- end:catalogue