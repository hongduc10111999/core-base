@extends('profile.index')
@section('cssnew')
    <style>
        .reply {
            display: none;
        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container py-5 px-2 bg-primary">
        <div class="row py-5 px-4">
            <div class="col-sm-6 text-center text-md-left">
                <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">Blog Detail</h1>
            </div>
            <div class="col-sm-6 text-center text-md-right">
                <div class="d-inline-flex pt-2">
                    <h4 class="m-0 text-white"><a class="text-white" href="">Home</a></h4>
                    <h4 class="m-0 text-white px-2">/</h4>
                    <h4 class="m-0 text-white">Blog Detail</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container py-5 px-2 bg-white">
        <div class="row px-4">
            @foreach ($posts as $post)
                <div class="col-12">
                    <img class="img-fluid mb-4" src="{{ get_image($post->banner) }}" alt="Image">
                    <h2 class="mb-3 font-weight-bold">{{ $post->name }}</h2>
                    <div class="d-flex">
                        <p class="mr-3 text-muted"><i class="fa fa-calendar-alt"></i>
                            {{ $post->created_at->format('d/m/Y') }}</p>
                        <p class="mr-3 text-muted"><i class="fa fa-folder"></i> Web Design</p>
                        <p class="mr-3 text-muted"><i class="fa fa-comments"></i> {{ count($post->comments) }}
                            Comments</p>
                    </div>
                    <div>
                        {!! html_entity_decode($post->content) !!}
                    </div>
                </div>
            @endforeach
            <div class="col-12 py-4">
                <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
            </div>
            <div class="col-12 py-4">
                <div class="btn-group btn-group-lg w-100">
                    @if ($posts->lastPage() > 1)
                        <button class="btn btn-outline-primary {{ $posts->currentPage() == 1 ? ' disabled' : '' }}">
                            <a href="{{ $posts->url(1) }}"><i class="fa fa-angle-left mr-2"></i>Previous</a>
                        </button>
                        <button
                            class="btn btn-outline-primary {{ $posts->currentPage() == $posts->lastPage() ? ' disabled' : '' }}">
                            <a href="{{ $posts->url($posts->currentPage() + 1) }}">Next<i
                                    class="fa fa-angle-right ml-2"></i></a>
                        </button>
                    @endif
                </div>
            </div>
            <div>
                {{-- {{ $posts->links() }} --}}
            </div>
            @if (empty($post))
                <h2>No post</h2>
            @else
                <div class="col-12 py-4 wrap_comment">
                    <h3 class="mb-4 font-weight-bold totalComment"> {{ count($post->comments) }}
                        Comments</h3>
                    @if ($errors->any())
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div id="">
                        <div class="newComment">
                            @foreach ($post->comments as $comment)
                                @if ($comment->parent == 0)
                                    <div class="media mb-4 commentDetail">
                                        <img src="{{ get_image($comment->avatar) }}" alt="Image"
                                            class="mr-3 mt-1 rounded-circle" style="width:60px;">
                                        <div class="media-body">
                                            <h4>{{ $comment->name }} <small><i>
                                                        {{ $comment->created_at->format('d M Y g:i a') }}</i></small></h4>
                                            <p>{{ $comment->content }}
                                            </p>
                                            <button class="btn btn-sm btn-light bntReply" id="bntReply"
                                                value="{{ $comment->id }}">Reply</button>
                                            <div id="commentReply-{{ $comment->id }}">
                                                @foreach ($comment->reply as $reply)
                                                    <div class="media mt-4 " id="detailReply-{{ $comment->id }}">
                                                        <img src="{{ get_image($reply->avatar) }}" alt="Image"
                                                            class="mr-3 mt-1 rounded-circle" style="width:60px;">
                                                        <div class="media-body">
                                                            <h4>{{ $reply->name }}
                                                                <small><i>{{ $reply->created_at->format('d M Y g:i a') }}</i></small>
                                                            </h4>
                                                            <p>{{ $reply->content }}
                                                            </p>
                                                            <button class="btn btn-sm btn-light bntReplyLv2"
                                                                value="{{ $comment->id }}">Reply</button>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="replyComment">

                                            </div>
                                            <div class="col-12 mt-2 reply" id="reply-{{ $comment->id }}">
                                                <form>
                                                    @csrf
                                                    <input type="hidden" name="_token" id="tokenReply"
                                                        value="{{ csrf_token() }}">
                                                    <input type="hidden" name="id_parent"
                                                        id="idParent-{{ $comment->id }}" value="{{ $comment->id }}" />
                                                    <input type="hidden" name="id_post" id="id_post"
                                                        value="{{ $post->id }}" />
                                                    <div class="form-group">
                                                        <label for="name">Name *</label>
                                                        <input name="name" type="text" class="form-control nameReply"
                                                            id="name-{{ $comment->id }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email *</label>
                                                        <input name="email" type="email" class="form-control"
                                                            id="email-{{ $comment->id }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="website">Website</label>
                                                        <input name="website" type="url" class="form-control"
                                                            id="website-{{ $comment->id }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="message">Message *</label>
                                                        <textarea name="content" id="message-{{ $comment->id }}" cols="30" rows="5" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group ">
                                                        <button type="submit" value="{{ $comment->id }}"
                                                            class="btn btn-primary bntReplyvl1">Reply</button>
                                                        <input type="submit" value="Cancel"
                                                            class="btn btn-secondary cancelReply">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div id="id_paginator" class="ml-2 mt-5"></div>
                    <div class="col-12 mt-3">
                        <h3 class="mb-4 font-weight-bold">Leave a comment</h3>
                        <form method="post">
                            @csrf
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <input type="hidden" id="idPost" name="id_post" value="{{ $post->id }}" />
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input name="newName" type="text" class="form-control" id="newName">
                                <div id="errorName"></div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input name="newEmail" type="email" class="form-control" id="newEmail">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input name="newWeb" type="url" class="form-control" id="newWeb">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea name="newMessage" id="newMessage" cols="30" rows="5" class="form-control"></textarea>
                                <div id="errorMessage"></div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Leave Comment" class="btn btn-primary bntNewComment">
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Blog Detail End -->
@endsection
@section('jsnew')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.tutorialjinni.com/simplePagination.js/1.6/jquery.simplePagination.js">
    </script>
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/simplePagination.js/1.6/simplePagination.css">

    <script>
        $(document).ready(function() {
            $(function(e) {
                var items = $(".commentDetail");

                var numItems = items.length;
                console.log(items.length);
                var perPage = 2;

                items.slice(2).hide();
                $("#id_paginator").pagination({
                    items: numItems,
                    itemsOnPage: perPage,
                    cssStyle: "light-theme",

                    onPageClick: function(pageNumber) {
                        var showFrom = perPage * (pageNumber - 1);
                        var showTo = showFrom + perPage;

                        items.hide().slice(showFrom, showTo).show();
                    }
                });
            });

            $(document).on('click', '.bntReply', function(event) {
                event.preventDefault();

                var idComment = $(this).val();
                console.log(idComment);

                $('.reply').slideUp();
                $('#reply-' + idComment).slideDown();
            });
            $(document).on('click', '.cancelReply', function(event) {
                event.preventDefault();

                $('.reply').slideUp();
            });

            $(document).on('click', '.bntReplyLv2', function(event) {
                event.preventDefault();

                var idComment = $(this).val();

                $('.reply').slideUp();
                $('#reply-' + idComment).slideDown();
            });

            function resetInputNewComment() {
                $('#newName').val("");
                $('#newEmail').val("");
                $('#newWeb').val("");
                $('#newMessage').val("");
            }

            function resetInputReplyComment(idComment) {
                $('#email-' + idComment).val("");
                $('#website-' + idComment).val("");
                $('#message-' + idComment).val("");
                $('#name-' + idComment).val("");
            }

            function createReplyComment() {
                $(document).on('click', '.bntReplyvl1', function(event) {
                    event.preventDefault();
                    var idComment = $(this).val();

                    var email = $('#email-' + idComment).val();
                    var web = $('#website-' + idComment).val();
                    var content = $('#message-' + idComment).val();
                    var id_post = $('#id_post').val();
                    var parent = $('#idParent-' + idComment).val();
                    var name = $('#name-' + idComment).val();
                    if (name == '' || content == '') {
                        alert('Name and Message can not blank!!!');
                    } else {
                        $.post('{{ route('comment.reply') }}', {
                            name: name,
                            email: email,
                            web: web,
                            content: content,
                            post_id: id_post,
                            parent: parent,
                            _token: '{{ csrf_token() }}'
                        }).done(function(data) {
                            $res = data.data;
                            console.log($res);
                            var date = moment($res.created_at).format(
                                'DD MMM yyyy h:mma');

                            var html = `
                                    <div class="media mt-4 " id="detailReply-${idComment}">
                                            <img src="http://127.0.0.1:8000/filemanager/uploads/${$res.avatar}" alt="Image"
                                                class="mr-3 mt-1 rounded-circle" style="width:60px;">
                                            <div class="media-body">
                                                <h4>${$res.name}
                                                    <small><i>${date}</i></small>
                                                </h4>
                                                <p>${$res.content}
                                                </p>
                                                <button class="btn btn-sm btn-light bntReplyLv2"
                                                    value="${idComment}">Reply</button>
                                            </div>
                                        </div>`

                            $('#commentReply-' + idComment).append(html);
                            resetInputReplyComment(idComment);
                            $('.totalComment').text(data.countComment + ' Comment');
                            $('.reply').slideUp();
                        })
                    }
                });
            }

            $(".bntNewComment").click(function(event) {
                event.preventDefault();

                var newName = $('#newName').val();
                var newEmail = $('#newEmail').val();
                var newWeb = $('#newWeb').val();
                var newMessage = $('#newMessage').val();
                var id_post = $('#idPost').val();

                $.post('{{ route('comment.new') }}', {
                    newName: newName,
                    newEmail: newEmail,
                    newWeb: newWeb,
                    newMessage: newMessage,
                    id_post: id_post,
                    _token: '{{ csrf_token() }}'
                }).done(function(data) {
                    if (data.errors) {
                        var errorMessageHtml =
                            `<span class="text-danger">${data.errors.newMessage}</span>`
                        var errorNameHtml =
                            `<span class="text-danger">${data.errors.newName}</span>`
                        if (data.errors.newMessage && data.errors.newName) {
                            $('#errorMessage').append(errorMessageHtml);
                            $('#errorName').append(errorNameHtml);
                        } else if (data.errors.newMessage) {
                            $('#errorMessage').append(errorMessageHtml);
                        } else if (data.errors.newName) {
                            $('#errorName').append(errorNameHtml);
                        }
                    } else {
                        $res = data.data;

                        var date = moment($res.created_at).format('DD MMM yyyy h:mma');

                        var html =
                            `<div class="media mb-4"><img src="{{ asset('filemanager/uploads/${ $res.avatar }') }}" alt="Image" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                                <div class="media-body">
                                    <h4>${ $res.name }<small><i>${ date }</i></small></h4>
                                    <p>${ $res.content }</p>
                                    <button class="btn btn-sm btn-light bntReply" id="bntReply" value="${ $res.id } ">Reply</button>
                                    <div id="commentReply-${ $res.id }"></div>
                                    <div class="col-12 mt-2 reply" id="reply-${ $res.id }">
                                        <form " method="post">
                                            @csrf
                                            <input type="hidden" name="id_parent" id="idParent-${ $res.id }" value="${ $res.id}" />
                                            <input type="hidden" name="id_post" id="id_post" value=" ${ id_post }" /> <div class="form-group">
                                                <label for="name">Name *</label>
                                                <input name="name" type="text" class="form-control" id="name-${ $res.id }">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email *</label> <input name="email" type="email" class="form-control" id="email-${ $res.id }">
                                                </div>
                                                <div class="form-group">
                                                    <label for="website">Website</label>
                                                    <input name="website" type="url" class="form-control" id="website-${ $res.id }">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message">Message *</label>
                                                    <textarea name="content" id="message-${ $res.id }" cols="30" rows="5"  class="form-control"></textarea>
                                                </div>
                                                <div class="form-group ">
                                                    <button value="${ $res.id }" class="btn btn-primary bntReplyvl1">Reply</button>
                                                    <input type="submit" value="Cancel" class="btn btn-secondary  cancelReply">
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>`
                        $('.newComment').append(html);
                        resetInputNewComment();
                        $('.totalComment').text(data.countComment + ' Comment')
                    }
                })
            });
            createReplyComment();
        });
    </script>
@endsection
