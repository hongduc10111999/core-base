<?php

namespace Corebase\Post\Repositories\Post;

use App\Classes\UploadFile;
use Corebase\Post\Models\Post;
use Corebase\Post\Repositories\BaseRepository;
use App\Imports\Imports;
use App\Exports\Exports;
use Excel;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return Post::class;
    }

    /**
     * Set model
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * getAll function
     *
     * @return void
     */
    public function getAll()
    {
        return $this->model->with('category')->get();
    }

    /**
     * showRemoved function
     *
     * @return void
     */
    public function showRemoved()
    {
        $data = $this->model->onlyTrashed()->get();
        return $data;
    }

    /**
     * restore function
     *
     * @param [type] $id
     * @return void
     */
    public function restore($id)
    {
        return $this->model->withTrashed()->find($id)->restore();
    }

    /**
     * forceDelete function
     *
     * @param [type] $id
     * @return void
     */
    public function forceDelete($id)
    {
        return Post::withTrashed()->find($id)->forceDelete();
    }

    /**
     * upLoadFile function
     *
     * @param [type] $request
     * @return void
     */
    public function uploadFile($request, $input)
    {
        $file = new UploadFile();
        $file->request = $request;
        $fileName = $file->upload($input);
        return $fileName;
    }

    private function addLinkImage($input)
    {
        $url = $input;
        $path = parse_url($url, PHP_URL_PATH);
        $pathFragments = explode('/', $path);

        return end($pathFragments);
    }

    public function createPost($request)
    {
        $data = $request->all();

        $fileNameImageDetail =  $this->addLinkImage($data['image']);
        $fileNameBanner = $this->addLinkImage($data['banner']);

        $dataCreate = [
            'name' => $data['name'],
            'slug' => '2',
            'image' => $fileNameImageDetail,
            'banner' => $fileNameBanner,
            'user_id' => auth()->user()->id,
            'category_id' => $data['category'],
            'content' => $data['content'],
            'note' => $data['note'],
            'status' => $data['status']
        ];

        return $this->model->create($dataCreate);
    }

    public function updatePost($request, $id)
    {
        $data = $request->all();
        
        if ($data['editimage'] != null) {
            $fileNameImageDetail =  $this->addLinkImage($data['editimage']);
        } else {
            $fileNameImageDetail = $this->model->find($id)->image;
        }

        if ($data['editbanner'] != null) {
            $fileNameBanner = $this->addLinkImage($data['editbanner']);
        } else {
            $fileNameBanner = $this->model->find($id)->banner;
        }

        $dataUpdate = [
            'name' => $data['editname'],
            'image' => $fileNameImageDetail,
            'user_id' => auth()->user()->id,
            'category_id' => $data['editcategory'],
            'content' => $data['editcontent'],
            'note' => $data['editnote'],
            'status' => $data['editstatus'],
            'banner' => $fileNameBanner
        ];

        return $this->model->find($id)->update($dataUpdate);
    }

    public function getPostViaUser($userId)
    {
        return $this->model->where('user_id', $userId);
    }

    public function exportPost()
    {
        return Excel::download(new Exports , ''.time().'-post.csv');
    }

    public function importPost($request)
    {
        $path = $request->file('file')->getRealPath();

        return Excel::import(new Imports, $path);
    }

    public function importPostOld($request)
    {
        $path = $request->file('file')->getRealPath();
        return Excel::import(new Imports, $path);
    }
}
