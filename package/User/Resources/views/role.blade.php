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
                                Role user: {{ $user->name }}
                            </div>
                            <form method="POST" action="{{ route('user.handlerole', $user->id) }}">
                                <div class="row">
                                    <div class="col-12">
                                        @csrf
                                        @foreach ($role as $key => $item)
                                            @if (isset($idRoles))
                                                <div class=" form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input"
                                                        {{ in_array($item->id,$idRoles) ? 'checked' : '' }}
                                                        name="role[]" id="{{ $item->id }}" value="{{ $item->name }}">
                                                    <label class="form-check-label"
                                                        for="{{ $item->id }}">{{ $item->name }}</label>
                                                </div>
                                            @else
                                                <div class=" form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" name="role[]"
                                                        id="{{ $item->id }}" value="{{ $item->name }}">
                                                    <label class="form-check-label"
                                                        for="{{ $item->id }}">{{ $item->name }}</label>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Update Role</button>
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
