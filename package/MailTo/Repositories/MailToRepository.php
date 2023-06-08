<?php

namespace Corebase\MailTo\Repositories;

use App\Classes\UploadFile;
use App\Repositories\BaseRepository;
use Corebase\MailTo\Models\MailTo;

class MailToRepository extends BaseRepository implements MailToRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return MailTo::class;
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

    public function store($request)
    {
        $data = $request->all();
        $dataStore = [
            'email' => $data['email'],
            'user_id' => auth()->user()->id
        ];
        return $this->model->create($dataStore);
    }
}
