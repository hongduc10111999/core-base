<?php

namespace Corebase\Profile\Http\Controllers;

use App\Http\Controllers\Controller;
use Corebase\Post\Models\Post;
use Corebase\Post\Repositories\Post\PostRepository;
use Corebase\Profile\Repositories\CommentRepository;
use Faker\Core\Blood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogDetailController extends Controller
{
    private $postRepository;

    private $commentRepository;

    public function __construct(
        PostRepository $postRepository,
        CommentRepository $commentRepository
    ) {
        $this->postRepository = $postRepository;
        $this->commentRepository = $commentRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->postRepository->getPostViaUser(auth()->user()->id)->paginate(1);

        return view('profile::pages.blogdetail', compact('posts'));
    }

    public function replyComment(Request $request)
    {
        $rules = ['content' => 'required', 'name' => 'required'];
            
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json( ['errors' => $validator->getMessageBag()->toArray()]);
        }

        $dataReplyComment = $this->commentRepository->addReplyComment($request);

        return response()->json($dataReplyComment);
    }

    public function newComment(Request $request)
    {
        $rules = ['newMessage' => 'required', 'newName' => 'required'];
            
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json( ['errors' => $validator->getMessageBag()->toArray()]);
        }

        $dataNewComment = $this->commentRepository->addNewComment($request);

        return response()->json($dataNewComment);
    }
}
