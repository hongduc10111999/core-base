@foreach ($comments as $comment)
    @if ($comment->parent == 0)
        <div class="media mb-4">
            <img src="{{ get_image($comment->avatar) }}" alt="Image" class="mr-3 mt-1 rounded-circle"
                style="width:60px;">
            <div class="media-body">
                <h4>{{ $comment->name }} <small><i>
                            {{ $comment->created_at->format('d M Y g:i a') }}</i></small></h4>
                <p>{{ $comment->content }}
                </p>
                <button class="btn btn-sm btn-light bntReply" id="bntReply" value="{{ $comment->id }}">Reply</button>
                @foreach ($comment->reply as $reply)
                    <div class="media mt-4">
                        <img src="{{ get_image($reply->avatar) }}" alt="Image" class="mr-3 mt-1 rounded-circle"
                            style="width:60px;">
                        <div class="media-body">
                            <h4>{{ $reply->name }}
                                <small><i>{{ $reply->created_at->format('d M Y g:i a') }}</i></small>
                            </h4>
                            <p>{{ $reply->content }}
                            </p>
                            <button class="btn btn-sm btn-light bntReplyLv2" value="{{ $comment->id }}">Reply</button>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 mt-2 reply" id="reply-{{ $comment->id }}">
                    <form action="{{ route('comment.reply') }}" method="post">
                        @csrf
                        <input type="hidden" name="id_parent" value="{{ $comment->id }}" />
                        <input type="hidden" name="id_post" value="{{ $post->id }}" />
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input name="name" type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input name="email" type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input name="website" type="url" class="form-control" id="website">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea name="content" id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group ">
                            <input type="submit" value="Reply" class="btn btn-primary ">
                            <input type="submit" value="Cancel" class="btn btn-secondary cancelReply">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endforeach
