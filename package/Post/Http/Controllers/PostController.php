<?php

namespace Corebase\Post\Http\Controllers;

use App\Http\Controllers\Controller;
use Corebase\Filemanager\src\Model\Filemanager;
use Corebase\Post\Repositories\Category\CategoryRepositoryInterface;
use Corebase\Post\Repositories\Post\PostRepositoryInterface;
use Illuminate\Http\Request;
use App\Imports\Imports;
use App\Exports\Exports;
use Excel;


class PostController extends Controller
{
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepository;

    public function __construct(
        PostRepositoryInterface $postRepository,
        CategoryRepositoryInterface $categoryRepository
    ) {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request)
    {
        $data = $this->postRepository->All();
        if ($request->has('view_deleted')) {
            $data = $this->postRepository->showRemoved();
        }

        return view('post::index', compact('data'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->all();
        return view('post::create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>  'required',
            'category' => 'required',
            'banner' => 'required',
            'content' => 'required',
            'note' => 'required',
            'status' => 'required',
            'image' => 'required',
        ]);

        $this->postRepository->createPost($request);

        return redirect(route('post.index'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'editname' =>  'required',
            'editcategory' => 'required',
            'editcontent' => 'required',
            'editnote' => 'required',
            'editstatus' => 'required'
        ]);

        $this->postRepository->updatePost($request, $id);

        return redirect(route('post.index'));
    }

    public function edit($id)
    {
        $post =  $this->postRepository->find($id);
        $categories = $this->categoryRepository->all();
        return view('post::edit', compact('post', 'categories'));
    }

    public function exportCsv(){
         return $this->postRepository->exportPost();
    }

    public function importCsv(Request $request){
        $request->validate([
            'file'=> 'required'
        ]);

        $this->postRepository->importPost($request);
        
        return back()->with('success', 'Post import successfully');
    }


    public function destroy($id)
    {
        $this->postRepository->delete($id);
        return redirect(route('post.index'))->with('success', 'Post deleted successfully');
    }

    public function restore($id)
    {
        $this->postRepository->restore($id);
        return redirect(route('post.viewdel'))->with('success', 'Post Restore successfully');
    }

    public function hardelete($id)
    {
        $this->postRepository->forceDelete($id);
        return redirect(route('post.viewdel'))->with('success', 'Post Hard Delete successfully');
    }
}
