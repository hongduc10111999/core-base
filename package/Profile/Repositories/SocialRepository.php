<?php

namespace Corebase\Profile\Repositories;

use App\Classes\UploadFile;
use App\Repositories\BaseRepository;
use Corebase\Profile\Models\Social;

class SocialRepository extends BaseRepository implements SocialRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return Social::class;
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

    public function updatSocail($request)
    {
        $data = $request->all();
        $dataSocials = [
            [
                'name' => $data['namesocail0'],
                'link' => $data['link0'],
                'class' => $data['class0'],
                'user_id' => auth()->user()->id
            ],
            [
                'name' => $data['namesocail1'],
                'link' => $data['link1'],
                'class' => $data['class1'],
                'user_id' => auth()->user()->id
            ],
            [
                'name' => $data['namesocail2'],
                'link' => $data['link2'],
                'class' => $data['class2'],
                'user_id' => auth()->user()->id
            ],
            [
                'name' => $data['namesocail3'],
                'link' => $data['link3'],
                'class' => $data['class3'],
                'user_id' => auth()->user()->id
            ],
        ];


        $oldSocials = $this->model->where(['user_id' => auth()->user()->id])->get();
        $idOldSocials = [];
        foreach ($oldSocials as $oldSocial) {
            $idOldSocials[] = $oldSocial['id'];
        }
        
        if ($idOldSocials) {
            $this->model->destroy($idOldSocials);
        }

        foreach ($dataSocials as $dataSocial) {
            $this->model->create($dataSocial);
        }
    }
}
