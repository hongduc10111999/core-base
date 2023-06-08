@extends('admin.index')
@section('content')
    <div class="page-container">
        <div class="page-content-wrapper">
            <div class="content ">
                <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10 mt-5">
                    <div class="mt-5">
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
                        @endif
                        @if (Request::has('view_deleted'))
                            <a href="{{ route('page.index') }}" aria-label="" id="show-modal"
                                class="btn btn-primary btn-cons">Back to list
                            </a>
                        @else
                            <a href="{{ route('page.create') }}" aria-label="" id="show-modal"
                                class="btn btn-primary btn-cons"><i class="pg-icon">add</i> Add
                                row
                            </a>
                            <a href="{{ route('page.index', ['view_deleted' => 'DeletedRecords']) }}"
                                class="btn btn-primary btn-cons">View DeletedF
                                Page</a>
                        @endif
                    </div>
                    <div class="mt-5">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-light">#</th>
                                    <th scope="col" class="text-light">Title</th>
                                    <th scope="col" class="text-light">Content</th>
                                    <th scope="col" class="text-light">Template</th>
                                    <th scope="col" class="text-light">Slug</th>
                                    <th scope="col" class="text-light">User</th>
                                    <th scope="col" class="text-light">Note</th>
                                    <th scope="col" class="text-light">Status</th>
                                    <th scope="col" class="text-light">x</th>
                                    <th scope="col" class="text-light">x</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $item)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->content }}</td>
                                        <td>{{ $item->template }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>{{ $item->username->name }}</td>
                                        <td>{{ $item->note }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            @if (Request::has('view_deleted'))
                                                <a href="{{ route('page.restore', $item->id) }}"
                                                    class="btn btn-warning">Restore</a>
                                            @else
                                            @can('edit page')
                                                <a href="{{ route('page.edit', $item->id) }}" type="submit"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                            @endcan

                                            @endif
                                        </td>
                                        <td>
                                            @if (Request::has('view_deleted'))
                                                <a href="{{ route('page.hardelete', $item->id) }}"
                                                    class="btn btn-danger">Hard Delete</a>
                                            @else
                                                <form method="POST" action="{{ route('page.destroy', $item->id) }}">
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
            </div>
        </div>
    </div>
@endsection
