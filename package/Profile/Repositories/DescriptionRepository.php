<?php

namespace Corebase\Profile\Repositories;

use App\Classes\UploadFile;
use App\Repositories\BaseRepository;
use Corebase\Profile\Models\Description;

class DescriptionRepository extends BaseRepository implements DescriptionRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return Description::class;
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

    public function updateDescription($request)
    {
        $data = $request->all();

        $urlImg = $data['imageDescription'];
        $path = parse_url($urlImg, PHP_URL_PATH);
        $pathFragments = explode('/', $path);
        $fileName = end($pathFragments);

        $description = [
            'title' => $data['titleDescription'],
            'image' => $fileName,
            'content' => $data['contentDescription'],
            'user_id' => auth()->user()->id
        ];

        $oldDescription = $this->model->where(['user_id' => auth()->user()->id])->first();

        if ($oldDescription) {
            $idOldDescription = $oldDescription->id;
            $this->model->destroy( $idOldDescription);
        }

        $this->model->create($description);
    }
}
