@extends('admin.index')
@section('content')
    <div class="page-container">
        <div class="page-content-wrapper">
            <div class="content ">
                <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10 mt-5">
                    <div>
                        <ul class="nav nav-pills nav-fill">
                            @foreach ($data as $item)
                                @php
                                    $class = '';
                                    $path = route('option.edit', $item->key);
                                    if ($path == url()->current()) {
                                        $class = 'active';
                                    }
                                @endphp
                                <li class="nav-item ">
                                    <a class="nav-link {{ $class }}" href="{{ $path }}">{{ $item->key }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @if ($option)
                        <div class="mt-5">
                            <form id="formedit" role="form" action="{{ route('option.update', $option->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @if ($option->key === 'logo')
                                    <div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Logo</label>
                                                <img src="" alt="xxx" class="">
                                                @php
                                                    $valueOption = get_option($option->key);
                                                @endphp
                                                <p>{{ $valueOption }}</p>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">New Logo</label>
                                                <input name="image" type="file" class="form-control"
                                                    onchange="chooseFile(this)" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Logo</label>
                                                <img width="300" height="200"
                                                    src="{{ asset('Thumnals/' . $option->value) }}" alt="xxx"
                                                    class="" id="imgfile">
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                @php
                                                    $valueOption = get_option($option->key);
                                                @endphp
                                                <p>{{ $valueOption }}</p>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">{{ $option->key }}</label>
                                                <textarea name="optionText" class="form-control" name="" id="" cols="63" rows="10">{{ $option->value }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-primary"
                                            [disabled]="!formcontrol.form.valid">Save</button>
                                        <button type="submit" class="btn btn-danger">Remove</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @else
                        <p>{{ config('option.provider') }}</p>
                        <div class="mt-5">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-light">#</th>
                                        <th scope="col" class="text-light">ID</th>
                                        <th scope="col" class="text-light">Key</th>
                                        <th scope="col" class="text-light">Value</th>
                                        <th>
                                            <form action="{{ route('option.addoption') }}" method="post">
                                                @csrf
                                                <select name="option">
                                                    <option value="logo">--make--</option>
                                                    <option value="logo">Logo</option>
                                                    <option value="copyright">Copyright</option>
                                                    <option value="header">Header</option>
                                                    <option value="phone">Phone</option>
                                                    <option value="facebook">Facebook</option>
                                                </select>
                                                <button type="submit">Add Option</button>
                                            </form>
                                        </th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->key }}</td>
                                            <td>{{ $item->value }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jsnew')
    <script>
        function chooseFile(fileInput) {
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imgfile').attr('src', e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
@endsection
