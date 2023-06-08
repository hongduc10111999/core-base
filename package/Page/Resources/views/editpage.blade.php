@extends('admin.index')
@section('content')
    <div class="page-container">
        <div class="page-content-wrapper">
            <div class="content ">
                <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10 mt-5">
                    @if (Session::has('success'))
                            <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
                        @endif
                    <form method="POST" action="{{ route('page.update', $oldData->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input name="title" type="" class="form-control" id="title"
                                aria-describedby="emailHelp" placeholder="Enter title" onkeyup="ChangeToSlug();"
                                value="{{ $oldData->title }}">
                            <small id="emailHelp" class="form-text text-muted">
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input name="slug" type="" class="form-control" id="slug"
                                aria-describedby="Slug Auto" placeholder="Slug Auto" value="{{ $oldData->slug }}">
                            <small id="emailHelp" class="form-text text-muted">
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Content</label>
                            <textarea name="content" name="" id="" cols="30" rows="10" class="form-control">{{ $oldData->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Template</label>
                            <select name="tamplate" class="custom-select">
                                <option value="1" {{ $oldData->template == 1 ? 'selected' : '' }}>One</option>
                                <option value="2" {{ $oldData->template == 2 ? 'selected' : '' }}>Two</option>
                                <option value="3" {{ $oldData->template == 3 ? 'selected' : '' }}>Three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Note</label>
                            <textarea name="note" id="" cols="30" rows="5" class="form-control">{{ $oldData->note }}</textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputPassword1">Status</label>
                            <div class="form-check form-check-inline ml-5">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                    value="1" {{ $oldData->status == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio1">Up</label>
                            </div>
                            <div class="form-check form-check-inline ml-5">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                    value="2" {{ $oldData->status == 2 ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio2">Down</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
