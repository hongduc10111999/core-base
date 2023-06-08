<?php
namespace Corebase\User\Repositories;

use App\Repositories\RepositoryInterface;

interface RoleRepositoryInterface extends RepositoryInterface
{
    public function syncPermissions($request, $id);

}
