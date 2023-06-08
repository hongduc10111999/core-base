@extends('admin.index')
@section('cssnew')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
    <div class="page-container">
        <div class="page-content-wrapper">
            <div class="content ">
                <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10 mt-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12">
                                <a href="{{ route('mailto.listdeleted') }}"class="btn btn-success"> List Removed</a>
                            </div>
                        </div>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td scope="row"> <input type="checkbox" value=""></td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td><a href="{{ route('mailto.softdelete', $item->id) }}" class="btn btn-danger">
                                            delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('jsnew')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
