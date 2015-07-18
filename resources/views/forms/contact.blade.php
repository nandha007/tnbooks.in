<div class="col-md-12 col-sm-12">
	<div class="alert alert-danger alert-dismissible hide" role="alert">
	  <ul class="errors">
	  </ul>
	</div>

	<div class="alert alert-success alert-dismissible hide" role="alert">
	  <div class="message">
	  </div>
	</div>
</div>

<div class="clearfix"></div>

<div class="col-md-12 col-sm-12">

	{!! Form::open(array('method' => 'post', 'id' => 'contactFrom')) !!}

	<h3>send message</h3>

	{!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Name *')) !!}
	{!! Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'Email *')) !!}
	{!! Form::text('contact_no', '', array('class' => 'form-control', 'placeholder' => 'Contact no', 'maxlength' => 10)) !!}
	{!! Form::text('subject', '', array('class' => 'form-control', 'placeholder' => 'Subject *')) !!}
	{!! Form::textarea('message', '', array('size' => '30x5', 'class' => 'form-control', 'placeholder' => 'Message *')) !!}
	
	<div class="checkbox">
	    <label>
	    	{!! Form::checkbox('subscribe') !!} Subscribe to newsletter
	    </label>
	</div>
	
	{!! Form::submit('Send Message', array('class' => 'btn btn-green btn-block btn-lg')) !!}

	{!! Form::close() !!}

</div>

<script type="text/javascript">

	 $("#contactFrom").on('submit', function(e) {

		e.preventDefault();
		$('.errors').html('').parent().addClass('hide');
		$('.message').html('').parent().addClass('hide');

		$(this).waitMe({
			effect : 'bounce',
			text : 'Please wait...',
			bg : 'rgba(0,0,0,0.1)',
			color : '#4891D6'
		});

		$.ajax({
			type: 'post',
			url:  "{{ route('contactAction') }}",
			data: $("#contactFrom").serializeArray(),
			dataType: 'json',
			success: function(data) {
				console.log(data);

				$("#contactFrom").waitMe('hide');
				
				$('.message').append( data.message ).parent().removeClass('hide');
				$('#contactFrom').trigger("reset");
				//$("#contactFrom").reset();
			},
			error: function(data) {
				var errors = data.responseJSON;
				console.log(errors);

				$("#contactFrom").waitMe('hide');

				$.each ( errors, function (key, error) {
					$('.errors').append('<li>' + error[0] + '</li>').parent().removeClass('hide');
				});
			}
		});
	});

</script>