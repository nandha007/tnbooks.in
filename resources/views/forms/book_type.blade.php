@if($errors->has())
<div class="alert alert-danger alert-dismissible" role="alert">
  <ul class="errors">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

{!! Form::open(array('url' => 'admin/book_type/add', 'method' => 'post', 'id' => 'bookTypeFrom', 'role' => 'form')) !!}
    <div class="form-group">
        <label>Book type *
            {!! Form::text('book_type', @$book_type->book_type, array('class' => 'form-control error')) !!}
        </label>
    </div>
    <div class="form-group">
        <label>Description *
            {!! Form::textarea('description', @$book_type->description, array('size' => '30x3', 'class' => 'form-control')) !!}
        </label>
    </div>
    
    {!! Form::hidden('book_type_id', @$book_type->book_type_id, array()) !!}
    {!! Form::submit('Submit', array('class' => 'btn btn-default')) !!}

{!! Form::close() !!}