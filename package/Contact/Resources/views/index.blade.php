@extends('profile.index')
@section('content')
    <!-- Page Header Start -->
    <div class="container py-5 px-2 bg-primary">
        <div class="row py-5 px-4">
            <div class="col-sm-6 text-center text-md-left">
                <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">Contact Me</h1>
            </div>
            <div class="col-sm-6 text-center text-md-right">
                <div class="d-inline-flex pt-2">
                    <h4 class="m-0 text-white"><a class="text-white" href="">Home</a></h4>
                    <h4 class="m-0 text-white px-2">/</h4>
                    <h4 class="m-0 text-white">Contact Me</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container bg-white pt-5">
        <div class="row px-3 pb-2">
            <div class="col-sm-4 text-center mb-3">
                <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Address</h4>
                <p>{{ $data->address }}</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Phone</h4>
                <p>{{ $data->phone }}</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Email</h4>
                <p>{{ $data->email }}</p>
            </div>
        </div>
        <div class="col-md-12 pb-5">
            <div class="contact-form">
                <div id="success"></div>
                <form id="formContact" method="GET" action="">
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                            required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject"
                            required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" name="message" rows="8" id="message" placeholder="Message" required="required"
                            data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('jsnew')
    <script>
        $(document).ready(function() {
            $('#formContact').submit(function(e) {
                e.preventDefault();
                var name = $('#name').val();
                var email = $('#email').val();
                var subject = $('#subject').val();
                var message = $('#message').val();
                var token = $(this).find("input[name='_token']").val();
                $.post('{{ route('mailto.store') }}', {
                        name: name,
                        email: email,
                        subject: subject,
                        message: message,
                        _token: token
                    })
                    .done(function(data) {
                        alert(data.res);
                        document.getElementById("formContact").reset();
                    })
                    .fail(function() {
                        alert('Failed')
                    })
            })
        })
    </script>
@endsection
