@extends('admin.index')
@section('content')
    <div class="page-content-wrapper">
        <div class="content ">
            <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10 mt-5">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success text-center" role='alert'>
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" value="" name="name"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" value="" name="email"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" class="form-control" value="" name="password"
                                aria-describedby="emailHelp">
                        </div>

                        <button class="btn btn-success" type="submit"> Add User</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
