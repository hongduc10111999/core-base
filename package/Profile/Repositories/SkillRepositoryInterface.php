<?php

namespace Corebase\Profile\Repositories;

use App\Repositories\RepositoryInterface;

interface SkillRepositoryInterface extends RepositoryInterface
{
    /**
     * upLoadFile function
     *
     * @param [type] $request
     * @return void
     */
    public function uploadFile($request, $input);

    /**
     * showRemoved function
     *
     * @return void
     */
    public function showRemoved();

    /**
     * restore function
     *
     * @param [type] $id
     * @return void
     */
    public function restore($id);

    /**
     * forceDelete function
     *
     * @param [type] $id
     * @return void
     */
    public function forceDelete($id);

    public function updateSkill($request);
}
