<?php

namespace Corebase\Profile\Repositories;

use App\Classes\UploadFile;
use App\Repositories\BaseRepository;
use Corebase\Profile\Models\Skill;

class SkillRepository extends BaseRepository implements SkillRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return Skill::class;
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

    public function updateSkill($request)
    {
        $data = $request->all();

        $dataSkills = [
            [
                'name' => $data['nameskill0'],
                'value' => $data['skill0'],
                'user_id' => auth()->user()->id
            ],
            [
                'name' => $data['nameskill1'],
                'value' => $data['skill1'],
                'user_id' => auth()->user()->id
            ],
            [
                'name' => $data['nameskill2'],
                'value' => $data['skill2'],
                'user_id' => auth()->user()->id
            ]
        ];
        
        $oldSkills = $this->model->where(['user_id' => auth()->user()->id])->get();
        $idOldSkill = [];
        foreach ($oldSkills as $oldSkill) {
            $idOldSkill[] = $oldSkill['id'];
        }

        if ($idOldSkill) {
            $this->model->destroy($idOldSkill);
        }

        foreach ($dataSkills as $dataSkill) {
            $this->model->create($dataSkill);
        }
    }
}
