@extends('profile.index')
@section('content')
    <div class="container p-0">

        <!-- Page Header Start -->
        <div class="container py-5 px-2 bg-primary">
            <div class="row py-5 px-4">
                <div class="col-sm-6 text-center text-md-left">
                    <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">About Me</h1>
                </div>
                <div class="col-sm-6 text-center text-md-right">
                    <div class="d-inline-flex pt-2">
                        <h4 class="m-0 text-white"><a class="text-white" href="">Home</a></h4>
                        <h4 class="m-0 text-white px-2">/</h4>
                        <h4 class="m-0 text-white">About Me</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- About Start -->
        <div class="container bg-white pt-5">
            <div class="row px-3 pb-5">
                <div class="col-md-12">
                    <h2 class="mb-4 font-weight-bold">{{ auth()->user()->description->title ?? '' }}</h2>
                    <img class="img-fluid float-left w-50 mr-4 mb-3"
                        src="{{ isset(auth()->user()->description->image) ? get_image(auth()->user()->description->image) : '' }}"
                        alt="Image">
                    <p class="m-0">
                        {!! isset(auth()->user()->description->content) ? html_entity_decode(auth()->user()->description->content ): '' !!}
                    </p>
                </div>
                <div class="col-md-12 pt-4">
                    <div class="d-flex flex-column skills">
                        @foreach (auth()->user()->skill as $skill)
                            <div class="progress w-100 mt-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->value }}"
                                    aria-valuemin="0" aria-valuemax="100">{{ $skill->name }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection
