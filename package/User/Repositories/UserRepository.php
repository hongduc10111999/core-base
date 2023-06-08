<?php

namespace Corebase\User\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return User::class;
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
        return User::withTrashed()->find($id)->forceDelete();
    }

    public function createNewUser($request)
    {
        $data = $request->all();
        $dataSave = [
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'name' => $data['name']
        ];
        return $this->model->create($dataSave);
    }
    public function changePassword($request,$id)
    {
        $dataUpdate = [
            'password' => Hash::make($request->password)
        ];
        return $this->model->find($id)->update($dataUpdate);
    }
    public function syncRoles($request, $id)
    {
        $data = $request->all();
        $user = $this->model->find($id);
        if (empty($data['role'])) {
            foreach ($user->roles as $role){
                $user->removeRole($role->name);
            }
            return ;
        }
        return $user->syncRoles($data['role']);
    }
}
