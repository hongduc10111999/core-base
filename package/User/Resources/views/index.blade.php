@extends('admin.index')
@section('cssnew')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
    <div class="page-content-wrapper">
        <div class="content ">
            <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10 mt-5">
                <div class="row">
                    @if (session('success'))
                    <div class="alert alert-success text-center " role='alert'>
                        {{ session('success') }}
                    </div>
                @endif
                    <div class="col-12">
                        <a href="{{ route('user.create') }}"class="btn btn-success"> Add Account</a>
                        <a href="{{ route('user.permission') }}" class="btn btn-success"> Edit Permission</a>
                    </div>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $user_role)
                                    {{ $user_role->name }}
                                    @endforeach
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning mr-2"> Edit</a>
                                        <a href="{{ route('user.role', $user->id) }}" class=" btn btn-success hover:bg-primary mr-2">Role</a>
                                        <form action="{{ route('user.destroy',$user->id)}}" method="POST" onsubmit="return confirm('Are you sure??');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger hover:bg-primary text-white"
                                                type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
