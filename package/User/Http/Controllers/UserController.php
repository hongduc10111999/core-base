<?php

namespace Corebase\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Corebase\User\Repositories\PermissionRepository;
use Corebase\User\Repositories\RoleRepository;
use Corebase\User\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var PermissionRepository
     */
    private $permissionRepository;

    /**
     * @var RoleRepository
     */
    private $roleRepository;

    /**
     * @var userRepository
     */
    private $userRepository;

    public function __construct(
        PermissionRepository $permissionRepository,
        RoleRepository $roleRepository,
        UserRepository $userRepository
    ) {
        $this->permissionRepository = $permissionRepository;
        $this->roleRepository = $roleRepository;
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->all();

        return view('user::index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user::adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->userRepository->createNewUser($request);
        return redirect()->back()->with('success', 'Add user complete');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);

        return view('user::edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->userRepository->changePassword($request, $id);
        return redirect()->back()->with('success', 'Update user complete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return redirect()->route('user.index')->with('success', 'User Deleted!');
    }
    public function showRole($id)
    {
        $user = $this->userRepository->find($id);
        $role = $this->roleRepository->all();
        $idRoles = [];
        if (isset($user->roles)) {
            foreach ($user->roles as $value) {
                $idRoles[] = $value->id;
            }
        }
        return view('user::role', compact('user', 'role', 'idRoles'));
    }

    public function syncRoles(Request $request, $id)
    {
        $this->userRepository->syncRoles($request, $id);
        return redirect()->back()->with('success', 'Add role user complete');
    }

    public function showPermission()
    {
        $permissions = $this->permissionRepository->all();
        $roles = $this->roleRepository->all();
        return view('user::permission', compact('permissions', 'roles'));
    }

    public function showPermissionsViaRole($id)
    {
        $roles = $this->roleRepository->all();
        $role = $this->roleRepository->find($id);
        $permissions = $this->permissionRepository->all();
        $rolePermissions = $role->permissions;
        return view('user::showpermission', compact('rolePermissions', 'role', 'permissions', 'roles'));
    }
    public function syncPermissions(Request $request, $id)
    {
        $this->roleRepository->syncPermissions($request, $id);
        return redirect()->back()->with('success', 'Add permission user complete');
    }
}
