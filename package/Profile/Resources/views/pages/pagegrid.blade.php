@extends('profile.index')
@section('content')
    <!-- Page Header Start -->
    <div class="container py-5 px-2 bg-primary">
        <div class="row py-5 px-4">
            <div class="col-sm-6 text-center text-md-left">
                <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">My Blog</h1>
            </div>
            <div class="col-sm-6 text-center text-md-right">
                <div class="d-inline-flex pt-2">
                    <h4 class="m-0 text-white"><a class="text-white" href="">Home</a></h4>
                    <h4 class="m-0 text-white px-2">/</h4>
                    <h4 class="m-0 text-white">My Blog</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog List Start -->
    <div class="container bg-white pt-5">
        @foreach ($data as $item)
            <div class="row blog-item px-3 pb-5">
                <div class="col-md-5">
                    <img class="img-fluid mb-4 mb-md-0" src="{{ get_image($item->image) }}" alt="Image">
                </div>
                <div class="col-md-7">
                    <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">{{ $item->name }}</h3>
                    <div class="d-flex mb-3">
                        <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i>
                            {{ $item->created_at->format('d/m/Y') }}</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> {{ $item->category->name}}</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> {{ count($item->comments) }} Comments</small>
                    </div>
                    <p>
                        {{$item->note}}
                    </p>
                    <a class="btn btn-link p-0" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        @endforeach
        <div class="row px-3 pb-5">
            {!! $data->links() !!}
        </div>
    </div>
    <!-- Blog List End -->
@endsection
