<?php

namespace Corebase\Profile\Http\Controllers;

use App\Http\Controllers\Controller;
use Corebase\Post\Repositories\Post\PostRepository;

class BlogGridController extends Controller
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->postRepository->getPostViaUser(auth()->user()->id)->paginate(5);
        return view('profile::pages.pagegrid',compact('data'));
    }
}
