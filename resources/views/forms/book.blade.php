@if($errors->has())
<div class="alert alert-danger alert-dismissible" role="alert">
  <ul class="errors">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

{!! Form::open(array('url' => 'admin/book/add', 'method' => 'post', 'id' => 'bookFrom', 'role' => 'form', 'files' => true)) !!}
    <div class="form-group">
        <label>Book name *
            {!! Form::text('book_name', @$book->book_name, array('class' => 'form-control error')) !!}
        </label>
    </div>

    <div class="form-group">
        <label>Author *
            {!! Form::text('author', @$book->author, array('class' => 'form-control error')) !!}
        </label>
    </div>

    <div class="form-group">
        <label>Publication *
            {!! Form::text('publication', @$book->publication, array('class' => 'form-control error')) !!}
        </label>
    </div>

    <div class="form-group">
        <label>Description *
            {!! Form::textarea('description', @$book->description, array('size' => '30x3', 'class' => 'form-control')) !!}
        </label>
    </div>

    <div class="form-group">
        <label>Rate *
            <div class="input-group">
            <span class="input-group-addon">&#8377;</span>
            {!! Form::text('rate', @$book->rate, array('class' => 'form-control error')) !!}
           </div> 
        </label>
    </div>

    <div class="form-group">
        <label>Discount *
            <div class="input-group">
            <span class="input-group-addon">&#8377;</span>
            {!! Form::text('discount', @$book->discount, array('class' => 'form-control error')) !!}
            </div>
        </label>
    </div>

    <div class="form-group">
        <label>Discount Qty *
            {!! Form::text('discount_qty', @$book->discount_qty, array('class' => 'form-control error')) !!}
        </label>
    </div>

    <div class="form-group">
        <label>Book type *
            {!! Form::select('book_type_id', ['default' => 'Please Select'] + @$book_types, @$book->book_type_id, array('class' => 'form-control error')) !!}
        </label>
    </div>

    <div class="form-group">
        <label>Category *
            {!! Form::select('category_id', ['default' => 'Please Select'] + @$categories, @$book->category_id, array('class' => 'form-control error')) !!}
        </label>
    </div>

    <div class="form-group">
        <label>Upload book *
            {!! Form::file('download_link', null) !!}
            <p>Upload only jpg, png, gif files alone.</p>
            
            @if(@$book->category_id)
                <p><img height="100" width="100" src="{{ asset($book->download_link) }}"></p>
            @endif

        </label>
    </div>

    <div class="form-group">
        <div class="checkbox">
            <label>
                {!! Form::checkbox('show_home_page', 1, @$book->show_home_page) !!} Show this book on home page
            </label>
        </div>
    </div>
    
    {!! Form::hidden('book_id', @$book->book_id, array()) !!}
    {!! Form::submit('Submit', array('class' => 'btn btn-default')) !!}

{!! Form::close() !!}