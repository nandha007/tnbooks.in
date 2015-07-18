@if($errors->has())
<div class="alert alert-danger alert-dismissible" role="alert">
  <ul class="errors">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

{!! Form::open(array('url' => 'admin/category/add', 'method' => 'post', 'id' => 'categoryFrom', 'role' => 'form')) !!}
    <div class="form-group">
        <label>Category name *
            {!! Form::text('category_name', @$category->category_name, array('class' => 'form-control error')) !!}
        </label>
    </div>
    <div class="form-group">
        <label>Description *
            {!! Form::textarea('description', @$category->description, array('size' => '30x3', 'class' => 'form-control')) !!}
        </label>
    </div>
    
    {!! Form::hidden('category_id', @$category->category_id, array()) !!}
    {!! Form::submit('Submit', array('class' => 'btn btn-default')) !!}

{!! Form::close() !!}