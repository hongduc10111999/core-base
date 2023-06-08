<?php

namespace Corebase\Page\Repositories\Page;

use App\Classes\UploadFile;
use Corebase\Page\models\Pages;
use Corebase\Post\Repositories\BaseRepository;

class PageRepository extends BaseRepository implements PageRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return Pages::class;
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
        return $this->model->with('user')->get();
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
        return $this->model->withTrashed()->find($id)->forceDelete();
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
}
