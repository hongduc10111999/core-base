<?php

namespace Corebase\Profile\Repositories;

use App\Classes\UploadFile;
use App\Repositories\BaseRepository;
use Corebase\Profile\Models\Slide;

class SlideRepository extends BaseRepository implements SlideRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return Slide::class;
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

    protected function updateData($oldDatas, $newDatas)
    {
        $idDatas = [];
        foreach ($oldDatas as $data) {
            $idDatas[] = $data['id'];
        }

        if ($idDatas) {
            $this->model->destroy($idDatas);
        }

        foreach ($newDatas as $mixData) {
            $this->model->create($mixData);
        }
    }

    public function updateSlide($request)
    {
        $data = $request->all();

        if (empty($data['slide'])) {

            $Slides = $this->model->where(['user_id' => auth()->user()->id])->get();
            foreach ($Slides as $slide) {
                $mixDatas[] = [
                    'thumb' => $slide['thumb'],
                    'user_id' => auth()->user()->id,
                    'note' => 'no'
                ];
            }

            $this->updateData( $Slides,$mixDatas);

            return back();
        }
        $slides = explode(',', $data['slide']);

        if (!empty($slides)) {
            foreach ($slides as $slide) {
                $mixDatas[] = [
                    'thumb' => $slide,
                    'user_id' => auth()->user()->id,
                    'note' => 'no'
                ];
            }
        }

        $oldSlides = $this->model->where(['user_id' => auth()->user()->id])->get();

        $this->updateData( $oldSlides,$mixDatas);
    }
}
