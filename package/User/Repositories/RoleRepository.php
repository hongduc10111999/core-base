<?php
namespace Corebase\User\Repositories;

use App\Repositories\BaseRepository;
use Spatie\Permission\Models\Role;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return Role::class;
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
    public function syncPermissions($request, $id)
    {
        $data = $request->all();
        $role = $this->model->find($id);
        if (empty($data['permission'])) {
            return $role->revokePermissionTo($role->permissions);
        }
        return $role->syncPermissions($data['permission']);
    }

}
