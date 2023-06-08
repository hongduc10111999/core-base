<div class="sidebar">
    <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
        <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3"
            src="{{ asset('filemanager/uploads/thumbs/'. auth()->user()->avata) }}" alt="Image">
        <h1 class="font-weight-bold">{{auth()->user()->name}}</h1>
        <p class="mb-4">
            {{ auth()->user()->target}}
        </p>
        <div class="d-flex justify-content-center mb-5">
            @foreach (auth()->user()->social as $social)
                <a class="btn btn-outline-primary mr-2" href="{{ $social->link }}"><i
                        class="{{ $social->class }}"></i></a>
            @endforeach
        </div>
        <a href="" class="btn btn-lg btn-block btn-primary mt-auto">Hire Me</a>
    </div>
    <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
        <i class="fas fa-2x fa-angle-double-right text-primary"></i>
    </div>
</div>
