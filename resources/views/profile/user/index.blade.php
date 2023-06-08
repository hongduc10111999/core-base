@extends('profile.index')
@section('content')
    <div class="container p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach (auth()->user()->slide as $key => $slide)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="w-100" src="{{ get_image($slide->thumb) }}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <h2 class="mb-3 text-white font-weight-bold">Lorem ipsum dolor sit amet</h2>
                            <div class="d-flex text-white">
                                <small class="mr-2"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                                <small class="mr-2"><i class="fa fa-folder"></i> Web Design</small>
                                <small class="mr-2"><i class="fa fa-comments"></i> 15 Comments</small>
                            </div>
                            <a href="" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Blog List Start -->
    <div class="container bg-white pt-5">
        @foreach (auth()->user()->posts as $key => $post)
            @if ($key == 3)
            @break
        @endif
        <div class="row blog-item px-3 pb-5">
            <div class="col-md-5">
                <img class="img-fluid mb-4 mb-md-0" src="{{ get_image($post->image) }}" alt="Image">
            </div>
            <div class="col-md-7">
                <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">{{ $post->name }}</h3>
                <div class="d-flex mb-3">
                    <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i>
                        {{ $post->created_at->format('d/m/Y') }}</small>
                    <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                    <small class="mr-2 text-muted"><i class="fa fa-comments"></i> {{ count($post->comments) }}
                        Comments</small>
                </div>
                <p>
                    {{ $post->note }}
                </p>
                <a class="btn btn-link p-0" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    @endforeach



    <!-- Blog List End -->


    <!-- Subscribe Start -->
    <div class="container py-5 px-4 bg-secondary text-center">
        <h1 class="text-white font-weight-bold">Subscribe My Newsletter</h1>
        <p class="text-white">Subscribe and get my latest article in your inbox</p>
        <form class="form-inline justify-content-center" action="" method="POST" id="formSubmit">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Subscribe End -->
    <!-- Blog List Start -->
    <div class="container bg-white pt-5">
        @foreach (auth()->user()->posts as $key => $post)
            @if ($key < 3)
                @continue
            @endif
            <div class="row blog-item px-3 pb-5">
                <div class="col-md-5">
                    <img class="img-fluid mb-4 mb-md-0" src="{{ get_image($post->image) }}" alt="Image">
                </div>
                <div class="col-md-7">
                    <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">{{ $post->name }}</h3>
                    <div class="d-flex mb-3">
                        <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i>
                            {{ $post->created_at->format('d/m/Y') }}</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> {{ count($post->comments) }}
                            Comments</small>
                    </div>
                    <p>
                        {{ $post->note }}
                    </p>
                    <a class="btn btn-link p-0" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('jsnew')
    <script>
        $(document).ready(function() {

            $('#formSubmit').submit(function(e) {
                e.preventDefault();
                var email = $('#email').val();
                var token = $(this).find("input[name='_token']").val();
                if (email == '') {
                    alert('you must type your email')
                    return;
                }
                $.post('{{ route('mailto.store') }}', {
                        email: email,
                        _token: token
                    })
                    .done(function(data) {
                        alert(data.res);
                    })
                    .fail(function() {
                        alert('Failed')
                    })
            })
        })
    </script>
@endsection
