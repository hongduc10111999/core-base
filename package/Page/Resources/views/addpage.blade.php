@extends('admin.index')
@section('content')
    <div class="page-container">
        <div class="page-content-wrapper">
            <div class="content ">
                <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10 mt-5">
                    <form method="POST" action="{{ route('page.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input name="title" type="" class="form-control" id="title"
                                aria-describedby="emailHelp" placeholder="Enter title" onkeyup="ChangeToSlug();" required>
                            <small id="emailHelp" class="form-text text-muted">
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input name="slug" type="" class="form-control" id="slug"
                                aria-describedby="Slug Auto" placeholder="Slug Auto">
                            <small id="emailHelp" class="form-text text-muted">
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Content</label>
                            <textarea name="content" name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Template</label>
                            <select name="tamplate" class="custom-select">
                                <option selected></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Note</label>
                            <textarea name="note" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputPassword1">Status</label>
                            <div class="form-check form-check-inline ml-5">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                    value="1" checked>
                                <label class="form-check-label" for="inlineRadio1" >Up</label>
                            </div>
                            <div class="form-check form-check-inline ml-5">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                    value="2">
                                <label class="form-check-label" for="inlineRadio2">Down</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" [disabled]="!formcontrol.form.valid">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jsnew')
    <script>
        function ChangeToSlug() {
            var title, slug;

            title = document.getElementById("title").value;

            slug = title.toLowerCase();

            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            slug = slug.replace(/ /gi, "-");
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            document.getElementById('slug').value = slug;
        }
    </script>
@endsection
