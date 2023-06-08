@extends('admin.index')
@section('css')
    <link href="{{ asset('themes/page/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('themes/page/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{{ asset('themes/page/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet"
        type="text/css" media="screen" />

    <link href="{{ asset('themes/page/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"
        media="screen" />

    <link href="{{ asset('themes/page/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css') }}"
        rel="stylesheet" type="text/css" />

    <link
        href="{{ asset('themes/page/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}"
        rel="stylesheet" type="text/css" />

    <link href="{{ asset('themes/page/assets/plugins/datatables-responsive/css/datatables.responsive.css') }}"
        rel="stylesheet" type="text/css" media="screen" />

    <link class="main-stylesheet" href="{{ asset('themes/page/pages/css/themes/light.css') }}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('package/post/src/css/style.css') }}">
@endsection
@section('cssnew')
    <style>
        #content {}
    </style>
@endsection
@section('content')
    <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
            <!-- MODAL STICK UP  -->
            <div class="modal fade stick-up" id="addNewAppModal" tabindex="-1" role="dialog"
                aria-labelledby="addNewAppModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header clearfix ">
                            <button aria-label="" type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                                    class="pg-icon">close</i>
                            </button>
                            <h4 class="p-b-5"><span class="semi-bold">New</span> App</h4>
                        </div>
                        <div class="modal-body">
                            <p class="small-text">Create a new app using this form, make sure you fill them all</p>
                            <form role="form" action="{{ Route('post.store') }}" method="POST"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Name</label>
                                            <input id="appName" type="text" class="form-control"
                                                placeholder="Name of your post" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default d-flex ">
                                            <input id="appDescription" type="file" class="form-control" name="image"
                                                onchange="chooseFile(this)">
                                            <img width="80" height="80" src="" alt="" id="imgfile">
                                        </div>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Up file
                                        </button>


                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Content</label>
                                            <textarea name="content" id="" cols="51" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Category</label>
                                            <select name="category" class="form-select" aria-label="Default select example">
                                                <option selected>--make--</option>
                                                <option value="1">Kinh tế</option>
                                                <option value="2">Chính trị</option>
                                                <option value="3">Khoa học</option>
                                                <option value="4">Nghệ thuật</option>
                                                <option value="5">Thể thao</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Status</label>
                                            <select name="status" class="form-select"
                                                aria-label="Default select example">
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
                                    <button aria-label="" type="button" class="btn btn-cons"
                                        data-dismiss="modal">Close</button>
                                </div>
                                @csrf
                            </form>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save
                                                changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade stick-up" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header clearfix ">
                            <button aria-label="" type="button" class="close" data-dismiss="modal"
                                aria-hidden="true"><i class="pg-icon">close</i>
                            </button>
                            <h4 class="p-b-5"><span class="semi-bold">Edit</span> Post</h4>
                        </div>
                        <div class="modal-body">
                            <p class="small-text">Create a new app using this form, make sure you fill them all</p>
                            <form id="formedit" role="form" action="post/{post}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Name</label>
                                            <input id="editname" type="text" class="form-control"
                                                placeholder="Name of your post" name="editname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <input id="appDescription" type="file" class="form-control"
                                                name="editimage">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Content</label>
                                            <textarea name="editcontent" id="editcontent" cols="51" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Category</label>
                                            <select name="editcategory" id="editcategory" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>--make--</option>
                                                <option value="1">Kinh tế</option>
                                                <option value="2">Chính trị</option>
                                                <option value="3">Khoa học</option>
                                                <option value="4">Nghệ thuật</option>
                                                <option value="5">Thể thao</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>User</label>
                                            <input id="edituser" type="text" class="form-control" name="edituser">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Status</label>
                                            <select name="editstatus" id="editstatus" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>--make--</option>
                                                <option value="1">UP</option>
                                                <option value="2">DOWN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Notes</label>
                                            <input name="editnote" id="editnote" type="text" class="form-control"
                                                placeholder="a note">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button aria-label="" id="add-app" type="submit"
                                        class="btn btn-primary  btn-cons">Edit</button>
                                    <button aria-label="" type="button" class="btn btn-cons"
                                        data-dismiss="modal">Close</button>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" container-fluid   container-fixed-lg">
                <!-- START card -->
                <div class="card card-transparent">
                    <div class="card-header ">
                        <div class="pull-right">
                            <div class="col-xs-12">
                                @if (Request::has('view_deleted'))
                                    <a href="{{ route('post.index') }}" class="btn btn-success">View Post</a>
                                @else
                                    {{-- <button aria-label="" id="show-modal" class="btn btn-primary btn-cons"><i
                                            class="pg-icon">add</i> Add
                                        row
                                    </button> --}}
                                    <a href="{{ route('post.create') }}" class="btn btn-primary btn-cons"><i
                                            class="pg-icon">add</i> Add
                                        item</a>
                                    <a href="{{ route('post.index', ['view_deleted' => 'DeletedRecords']) }}"
                                        class="btn btn-primary btn-cons">View Deleted
                                        Post</a>
                                @endif
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
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
                    <div class="ml-3">
                        <form action="{{ url('export-csv') }}" method="POST">
                            @csrf
                            <input type="submit" value="Export CSV" name="export_csv" class="btn btn-warning">
                        </form>
                    </div>
                    <div class="mt-3 ml-3">
                        <form action="{{ url('import-csv') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex">
                                <input type="file" name="file" accept=".csv"><br>
                                <input type="submit" value="Import CSV" name="import_csv" class="btn btn-warning">
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover demo-table-dynamic table-responsive-block"
                            id="tableWithDynamicRows">
                            <thead>
                                <tr>
                                    <th>Post id</th>
                                    <th>Post Name</th>
                                    <th>Post Image</th>
                                    <th>Category</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Notes</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="v-align-middle">
                                            {{ $item->id }}
                                        </td>
                                        <td class="v-align-middle">
                                            {{ $item->name }}
                                        </td>
                                        <td class="v-align-middle">
                                            <img width="100" height="100" src="{{ get_image($item->image) }}"
                                                alt="xxx">
                                        </td>
                                        <td class="v-align-middle">
                                            {{ $item->category->name ?? '' }}
                                        </td>
                                        <td class="v-align-middle">
                                            {{ $item->user->name }}
                                        </td>
                                        <td class="v-align-middle">
                                            {{ $item->status == 1 ? 'Up' : 'Down' }}
                                        </td>
                                        <td class="v-align-middle">
                                            {{ $item->note }}
                                        </td>
                                        <td class="v-align-middle">
                                            @if (Request::has('view_deleted'))
                                                <a href="{{ route('post.restore', $item->id) }}"
                                                    class="btn btn-warning">Restore</a>
                                            @else
                                                {{-- <button id="abcd" aria-label="" data-toggle="modal"
                                                    data-target="#myModal" class="btn btn-primary btn-cons edit"><i
                                                        class="pg-icon">edit</i> Edit
                                                    row --}}
                                                </button>
                                                <a href="{{ route('post.edit', $item->id) }}"
                                                    class="btn btn-primary btn-cons edit"><i class="pg-icon">edit</i> Edit
                                                    item</a>
                                            @endif
                                        </td>
                                        <td class="v-align-middle">
                                            @if (Request::has('view_deleted'))
                                                <a href="{{ route('post.hardelete', $item->id) }}"
                                                    class="btn btn-danger">Hard Delete</a>
                                            @else
                                                <form method="POST" action="{{ route('post.destroy', $item->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm del"><span>DEL</span></button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END card -->
            </div>
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
@endsection
@section('js')
    <script src="{{ asset('themes/page/assets/plugins/feather-icons/feather.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/page/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <!--  A polyfill for browsers that don't support ligatures: remove liga.js if not needed-->
    <script src="{{ asset('themes/page/assets/plugins/liga.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/page/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/page/assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/page/assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/page/assets/plugins/popper/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/page/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/page/assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/page/assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('themes/page/assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('themes/page/assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
    <script src="{{ asset('themes/page/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/page/assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/page/assets/plugins/classie/classie.js') }}"></script>
    <script src="{{ asset('themes/page/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}"
        type="text/javascript"></script>
    <script
        src="{{ asset('themes/page/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('themes/page/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}"
        type="text/javascript"></script>
    <script
        src="{{ asset('themes/page/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}"
        type="text/javascript"></script>
    <script type="text/javascript"
        src="{{ asset('themes/page/assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/page/assets/plugins/datatables-responsive/js/lodash.min.js') }}">
    </script>
    <script src="{{ asset('themes/page/pages/js/pages.js') }}"></script>
    <script src="{{ asset('themes/page/assets/js/scripts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/page/assets/js/datatables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/page/assets/js/scripts.js') }}" type="text/javascript"></script>
@endsection
@section('jsnew')
    <script>
        $(document).ready(function() {
            var table = $('#tableWithDynamicRows').DataTable();
            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                $('#editname').val(data[1]);
                $('#inputimage').val(data[2]);
                $('#editcontent').val(data[3]);
                $('#editcategory').val(data[4]);
                $('#edituser').val(data[5]);
                $('#editstatus').val(data[6]);
                $('#editnote').val(data[7]);
                $('#formedit').attr('action', 'post/' + data[0]);
            });
        });

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
