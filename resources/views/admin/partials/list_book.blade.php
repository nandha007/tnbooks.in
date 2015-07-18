@extends('admin.app')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Books</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">

            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <div class="message">
                {{ Session::get('success') }}
                </div>
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    Books List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-books">
                            <thead>
                                <tr>
                                    <th width="15%">Book name</th>
                                    <th>Description</th>
                                    <th width="15%">Book type</th>
                                    <th width="15%">Category</th>
                                    <th width="10%">Show on home page</th>
                                    <th width="13%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($books as $key => $book)
                                <tr data-aa="{{ $key }}" class="{{ (($key%2 === 0) ? 'even' : 'odd') }}">
                                    <td>{{ @$book->book_name }}</td>
                                    <td>{{ @$book->description }}</td>
                                    <td>{{ @$book->book_type->book_type }}</td>
                                    <td>{{ @$book->category->category_name }}</td>
                                    <td>{{ ($book->show_home_page) ? 'Yes' : 'No' }}</td>
                                    <td class="center">
                                        <a title="View" target="_blank" href="{{ asset($book->download_link) }}"><button type="button" class="btn btn-circle btn-info btn-xs"><i class="fa fa-eye"></i></button></a>
                                        <a title="Edit" href="{{ route('admin_edit_book', [$book->book_id]) }}"><button type="button" class="btn btn-circle btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i></button></a>
                                        <a title="Delete" href="{{ route('admin_delete_book', [$book->book_id]) }}"><button type="button" class="btn btn-circle btn-danger btn-xs"><i class="fa fa-times"></i></button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->

@endsection


@section('script')

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
    $('#dataTables-books').DataTable({
            responsive: true
    });
});
</script>

@endsection