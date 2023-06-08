<?php

namespace Corebase\User\Repositories;

use App\Repositories\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
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

    public function createNewUser($request);

    public function changePassword($request,$id);
    public function syncRoles($request, $id);
}
