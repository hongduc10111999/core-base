@extends('admin.index')
@section('content')
    <div class="page-content-wrapper">
        <div class="content ">
            <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10 mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @if (session('success'))
                            <div class="alert alert-success text-center" role='alert'>
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card text-center">
                            <div class="card-header">
                            </div>
                            <form method="POST" action="{{ route('user.handlepermission',$role->id) }}">

                                <div class="row">
                                    <div class="col-12">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-12 d-flex justify-content-around">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">

                                                        {{$role->name ?? 'Select Role'}}
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        @foreach ($roles as $role)
                                                        <a class="dropdown-item" href="{{ route('user.showpermissionsvialrole', $role->id)}}">{{  $role->name }}</a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($permissions as $item)
                                            <div class="col-3">
                                                <div class="class-checkbox">
                                                    <input type="checkbox" name="permission[]" class="form-check-input"
                                                        value="{{ $item->id }}" id="{{ $item->id }}"
                                                        @foreach ($rolePermissions as $value)
                                                            @if ($value->id == $item->id)
                                                                checked
                                                            @endif
                                                        @endforeach>
                                                    <label for="{{ $item->id }}" class="form-check-label">
                                                        {{ $item->name }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Update Permission</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
