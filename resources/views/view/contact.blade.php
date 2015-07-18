<!-- begin:contact -->
<div class="page-content contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
				  <li><a href="{{ route('index') }}">Home</a></li>
				  <li class="active">Contact Us</li>
				</ol>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12 text-center">
				<h3>Do you have any quires?</h3>
				<p>Feel free to contact us, you can either send out a message with your quires and we will get back to you or you can reach us through the contact details given below.<br>We would be happy to help you.</p>
			</div>
		</div>

		<div class="row padd20-top-btm">

		<div class="col-md-5 col-sm-12">	

			@include('forms.contact')

		</div>
		
		<div class="col-md-5 col-sm-12 col-md-offset-2 pull-left">	

			@include('view.address')

		</div>

		</div>

	</div>

</div>

<!-- <div id="maps"></div> -->
<!-- end:contact -->