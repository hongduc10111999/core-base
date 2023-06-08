@extends('admin.index')
@section('content')
    <div class="page-content-wrapper">
        <div class="content ">
            <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10 mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @if (session('success'))
                            <div class="alert alert-success text-center " role='alert'>
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('user.update',$user->id)}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" value="{{ $user->name }}" name="name"
                                    aria-describedby="emailHelp" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" value="{{ $user->email }}" name="email"
                                    aria-describedby="emailHelp" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">password</label>
                                <input type="password" class="form-control" value="{{ $user->password }}" name="password"
                                    aria-describedby="emailHelp">
                            </div>

                            <button class="btn btn-success" type="submit"> Update User</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
