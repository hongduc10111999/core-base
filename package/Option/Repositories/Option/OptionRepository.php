<?php

namespace Corebase\Option\Repositories\Option;

use App\Classes\UploadFile;
use Corebase\Option\Models\Options;
use Corebase\Post\Repositories\BaseRepository;

class OptionRepository extends BaseRepository implements OptionRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return Options::class;
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
}
