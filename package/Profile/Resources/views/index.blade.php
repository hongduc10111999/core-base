@extends('admin.index')
@section('cssnew')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
    <div class="page-container">
        <div class="page-content-wrapper">
            <div class="content ">
                <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10 mt-5">
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger text-center">{{ Session::get('error') }}</div>
                    @endif
                    <div>
                        <form action="{{ route('profile.store') }}" method="post">
                            @csrf
                            <div>
                                <h4>My silde</h4>
                                <div>
                                    @foreach ($slides as $slide)
                                        <img src="{{ get_image($slide->thumb) }}" alt="" width="150"
                                            height="150">
                                    @endforeach
                                    <button id="chooseImage"
                                        onclick="filemanager.bulkSelectFile('myBulkSelectCallback')">Choose
                                        Images</button>
                                </div>
                                <div class="imgae1">
                                </div>
                            </div>
                            <div class="d-flex justify-content-around mt-5 ">
                                <div class="border border-primary rounded p-2">
                                    <h4>My skill</h4>
                                    <div>
                                        @if ($skills->count() > 0)
                                            <table class="table table-bordered ">
                                                <tr>
                                                    <th>Name skill</th>
                                                    <th>Value</th>
                                                </tr>
                                                <tr>
                                                    <td><input name="nameskill0" type="text" value="Adaptability"></td>
                                                    <td><input name="skill0" type="text"
                                                            value="{{ $skills[0]->value }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="nameskill1" type="text" value="Research"></td>
                                                    <td><input name="skill1" type="text"
                                                            value="{{ $skills[1]->value }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="nameskill2" type="text" value="Editing"></td>
                                                    <td><input name="skill2" type="text"
                                                            value="{{ $skills[2]->value }}"></td>
                                                </tr>
                                            </table>
                                        @else
                                            <table class="table table-bordered ">
                                                <tr>
                                                    <th>Name skill</th>
                                                    <th>Value</th>
                                                </tr>
                                                <tr>
                                                    <td><input name="nameskill0" type="text" value="Adaptability"></td>
                                                    <td><input name="skill0" type="text" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="nameskill1" type="text" value="Research"></td>
                                                    <td><input name="skill1" type="text" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="nameskill2" type="text" value="Editing"></td>
                                                    <td><input name="skill2" type="text" value=""></td>
                                                </tr>
                                            </table>
                                        @endif

                                    </div>
                                </div>
                                <div class="border border-primary rounded p-2">
                                    <h4>My socials</h4>
                                    <div>
                                        @if ($socials->count() > 0)
                                            <table class="table table-bordered border border-primary">
                                                <tr>
                                                    <th>Name socials</th>
                                                    <th>Link</th>
                                                    <th>Class</th>
                                                </tr>
                                                <tr>
                                                    <td><input name="namesocail0" type="text"
                                                            value="{{ $socials[0]->name }}"></td>
                                                    <td><input name="link0" type="text"
                                                            value="{{ $socials[0]->link }}"></td>
                                                    <td><input name="class0" type="text"
                                                            value="{{ $socials[0]->class }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="namesocail1" type="text"
                                                            value="{{ $socials[1]->name }}"></td>
                                                    <td><input name="link1" type="text"
                                                            value="{{ $socials[1]->link }}"></td>
                                                    <td><input name="class1" type="text"
                                                            value="{{ $socials[1]->class }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="namesocail2" type="text"
                                                            value="{{ $socials[2]->name }}"></td>
                                                    <td><input name="link2" type="text"
                                                            value="{{ $socials[2]->link }}"></td>
                                                    <td><input name="class2" type="text"
                                                            value="{{ $socials[2]->class }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="namesocail3" type="text"
                                                            value="{{ $socials[3]->name }}"></td>
                                                    <td><input name="link3" type="text"
                                                            value="{{ $socials[3]->link }}"></td>
                                                    <td><input name="class3" type="text"
                                                            value="{{ $socials[3]->class }}"></td>
                                                </tr>
                                            </table>
                                        @else
                                            <table class="table table-bordered border border-primary">
                                                <tr>
                                                    <th>Name socials</th>
                                                    <th>Link</th>
                                                    <th>Class</th>
                                                </tr>
                                                <tr>
                                                    <td><input name="namesocail0" type="text" value="twitter"></td>
                                                    <td><input name="link0" type="text" value=""></td>
                                                    <td><input name="class0" type="text" value="fab fa-twitter"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="namesocail1" type="text" value="facebook"></td>
                                                    <td><input name="link1" type="text" value=""></td>
                                                    <td><input name="class1" type="text" value="fab fa-facebook-f">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input name="namesocail2" type="text" value="linkedin"></td>
                                                    <td><input name="link2" type="text" value=""></td>
                                                    <td><input name="class2" type="text" value="fab fa-linkedin-in">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input name="namesocail3" type="text" value="instagram"></td>
                                                    <td><input name="link3" type="text" value=""></td>
                                                    <td><input name="class3" type="text" value="fab fa-instagram">
                                                    </td>
                                                </tr>
                                            </table>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div>
                                    <h4>My description</h4>
                                    <div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input name="titleDescription" type="text"
                                                value="{{ $description->title ?? ''}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <img src="{{ isset($description->image)?get_image($description->image):'' }}" alt=""
                                                width="150" height="150">
                                            <input name="imageDescription" type="text" id="profile-photo">
                                            <button id="choose"
                                                onclick="filemanager.selectFile('profile-photo')">Choose</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea name="contentDescription" id="tinymce" cols="30" rows="10">{{ $description->content ?? ''}}</textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
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
        window.myBulkSelectCallback = function(data) {
            image = [];
            data.forEach((e, index) => {
                image.push(e.name);
            });
            console.log(image);
            $('.imgae1').append('<input name=slide value=' + image + '>');
        };
    </script>
    <script>
        $(document).ready(function() {
            $('#choose').on('click', function(e) {
                e.preventDefault();
            });
            $('#chooseImage').on('click', function(e) {
                e.preventDefault();
            });
        });
    </script>
@endsection
