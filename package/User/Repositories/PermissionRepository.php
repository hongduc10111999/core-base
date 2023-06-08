<?php
namespace Corebase\User\Repositories;

use App\Repositories\BaseRepository;
use Corebase\User\Repositories\PermissionRepositoryInterface;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return Permission::class;
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

}
