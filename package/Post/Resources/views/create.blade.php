@extends('admin.index')
@section('content')
    <div class="page-container">
        <div class="page-content-wrapper">
            <div class="content ">
                <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10 mt-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <div class="mt-3">
                        <form action="{{ url('import-csv') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex">
                                <input type="file" name="file" accept=".csv"><br>
                                <input type="submit" value="Import CSV" name="import_csv" class="btn btn-warning">
                            </div>
                        </form>
                    </div>
                    <form role="form" action="{{ Route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Name</label>
                                    <input id="appName" type="text" class="form-control"
                                        placeholder="Name of your post" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <label>Image Detail</label> <br>
                            <input type="hidden" id="profile-photo" name="image">
                            <img src="" id="profile-photo-preview" width="150" height="80">
                            <button class="btn btn-primary" id='choose'
                                onclick="filemanager.selectFile('profile-photo')">Choose</button>
                        </div>
                        <div class="mt-2">
                            <label>Banner</label> <br>
                            <input type="text" id="profile-photo-banner" name="banner">
                            <button class="btn btn-primary" id='choose-banner'
                                onclick="filemanager.selectFile('profile-photo-banner')">Choose</button>
                        </div>


                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Content</label>
                                    <textarea name="content" id="tinymce"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Category</label>
                                    <select name="category" class="form-select" aria-label="Default select example">
                                        <option selected>--make--</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Status</label>
                                    <select name="status" class="form-select" aria-label="Default select example">
                                        <option selected>--make--</option>
                                        <option value="1">UP</option>
                                        <option value="2">DOWN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Notes</label>
                                    <input name="note" id="appNotes" type="text" class="form-control"
                                        placeholder="a note">
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button aria-label="" id="add-app" type="submit"
                                class="btn btn-primary  btn-cons">Add</button>
                            <button aria-label="" type="button" class="btn btn-cons" data-dismiss="modal">Close</button>
                        </div>
                        {{-- <div id="editor"></div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jsnew')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        window.onload = function() {

            tinymce.init({
                selector: '#tinymce',
                height: 200,
                plugins: 'image',
                toolbar: 'bold italic underline | image',
                branding: false,
                file_picker_callback: filemanager.tinyMceCallback,
            });

        };
    </script>
    <script>
        $(document).ready(function() {
            $('#choose').on('click', function(e) {
                e.preventDefault();
            });
            $('#choose-banner').on('click', function(e) {
                e.preventDefault();
            });
        });
    </script>
@endsection
