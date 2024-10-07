<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Role\RoleRepositoryInterface;
use Illuminate\Http\Request;
use DataTables;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $roleRepository;

    public function __construct(RoleRepositoryInterface $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function index(Request $request)
    {
        // return $this->roleRepository->getAll();

        if ($request->ajax()) {
            $data = $this->roleRepository->getAll();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '
                        <a href="roles/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '.trans('data.Edit').'
                        </a> &nbsp;
                        <form id="delete-form" method="POST" action="roles/' . $row->id . '" style="display:inline-block">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="submit" class="btn btn-danger btn-icon-text">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                '.trans('data.Delete').'
                            </button>
                        </form>
                    ';

                    return $btn;
                })
                ->addColumn('permissions', function ($row) {

                    $btn = '
                        <a href="roles/' . $row->id . '/permissions" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '.trans('data.Permissions').'
                        </a>
                    ';

                    return $btn;
                })
                ->rawColumns(['action', 'permissions'])
                ->make(true);
        }

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.roles.index', compact('module_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.roles.create', compact('module_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'name_ar' => 'required',
        ]);

        $this->roleRepository->store($request->all());

        return redirect('roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = $this->roleRepository->get($id);

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.roles.edit', compact('module_name', 'role'));
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
        $request->validate([
            'name' => 'required',
            'name_ar' => 'required',
        ]);

        $this->roleRepository->update($id, $request->all());

        return redirect('roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->roleRepository->delete($id);

        return redirect('roles');
    }

    // ********** end CRUD opertions *********



    ///  ******** assign roles for users ******

    public function assignRoles($id)
    {
        $user = User::where('id', $id)->first();
        $userRoles = $user->roles()->pluck('name')->toArray();
        // return $userRoles;
        $roles = Role::all();
        $rolesLang = [];
        foreach ($roles as $role) {
            if (app()->getLocale() == 'en') {
                $rolesLang[$role->name] = $role->name;
            } elseif (app()->getLocale() == 'ar') {
                $rolesLang[$role->name] = $role->name_ar;
            } else {
                $rolesLang[$role->name] = $role->name;
            }
        }

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.users.roles.index', compact('module_name', 'user', 'rolesLang', 'userRoles'));
    }

    public function setUserRoles(Request $request, $id)
    {

        $user = User::where('id', $id)->first();

        $user->syncRoles($request->roles);

        return redirect('users');
    }


    ///   ********** assign permissions for roles *********

    public function assignPermissions($id)
    {
        $role = Role::where('id', $id)->first();
        $rolePermissions = $role->getPermissionNames();

        // return $rolePermissions;
        $rolePermissionsArr = json_decode(json_encode($rolePermissions), true);

        $permissions = Permission::all();

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.roles.permissions.index', compact('module_name', 'permissions', 'rolePermissionsArr', 'id'));
    }

    public function setPermissions(Request $request, $id)
    {

        $role = Role::where('id', $id)->first();
        $role->syncPermissions($request->permissions);

        return redirect('roles');
    }

    /// ************ assign permissions for user *******

    public function assignUserPermission($id)
    {
        $user = User::where('id', $id)->first();
        $permissions = Permission::all();
        $selectedPermissions = $user->getAllPermissions()->pluck('name')->toArray();

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.users.permissions.index', compact('user', 'permissions', 'selectedPermissions', 'module_name'));
    }

    public function addPermissionToUser($id,Request $request)
    {
        // return $request;
        $user = User::where('id',$id)->first();
        // return $user;
        $user->syncPermissions($request['permissions']);

        return redirect('users');
    }
}
