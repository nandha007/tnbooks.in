@extends('admin.app')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Book type</h1>
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
                    Book types List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-book-type">
                            <thead>
                                <tr>
                                    <th width="30%">Book type</th>
                                    <th>Description</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($book_types as $key => $book_type)
                                <tr class="{{ (($key%2 === 0) ? 'even' : 'odd') }}">
                                    <td>{{ $book_type->book_type }}</td>
                                    <td>{{ $book_type->description }}</td>
                                    <td class="center">
                                        <a href="{{ route('admin_edit_book_type', [$book_type->book_type_id]) }}"><button type="button" class="btn btn-outline btn-primary btn-xs">Edit</button></a>
                                        <a href="{{ route('admin_delete_book_type', [$book_type->book_type_id]) }}"><button type="button" class="btn btn-outline btn-danger btn-xs">Delete</button></a>
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
    $('#dataTables-book-type').DataTable({
            responsive: true
    });
});
</script>

@endsection