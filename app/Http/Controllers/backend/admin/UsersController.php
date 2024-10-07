<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserRequestEdit;
use App\Models\Description;
use App\Models\GradeUser;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\Repositories\Grade\GradeRepository;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = $this->userRepository->getAll();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    $img = '<img src="' . asset("storage/file/" . $row->image) . '" width="200" height="200">';
                    return $img;
                })
                ->addColumn('action', function ($row) {
                    if ($row->account_type != "super_admin") {
                        $btn = '
                            <a href="users/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                                <i class="mdi mdi-pencil btn-icon-prepend"></i>
                                '. __('data.Edit').'
                            </a> &nbsp;
                            <form id="delete-form" method="POST" action="users/' . $row->id . '" style="display:inline-block">
                                ' . csrf_field() . '
                                ' . method_field("DELETE") . '
                                <button type="submit" class="btn btn-danger btn-icon-text">
                                    <i class="mdi mdi-delete btn-icon-prepend"></i>
                                    '. __('data.Delete').'
                                </button>
                            </form>
                        ';

                        return $btn;
                    }
                })
                ->addColumn('role', function ($row) {
                    if ($row->account_type != "super_admin" && $row->account_type != "student") {
                        $btn = '
                            <a href="users/' . $row->id . '/role" class="edit btn btn-primary btn-sm">
                                <i class="mdi mdi-pencil btn-icon-prepend"></i>
                                '. __('data.Add Role').'
                            </a>
                        ';

                        return $btn;
                    }
                })
                ->addColumn('description', function ($row) {
                    if ($row->account_type == "teacher") {
                        $btn = '
                            <a href="users/' .$row->id. '/description/add" class="edit btn btn-primary btn-sm">
                                <i class="mdi mdi-file-document btn-icon-prepend"></i>
                                '. __('data.Add Description').'
                            </a>
                        ';

                        return $btn;
                    }
                })
                ->rawColumns(['action', 'role','description','image'])
                ->make(true);
        }
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.users.index', compact('module_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = ['Egypt', 'KSA'];
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = 'Create New ' . Str::singular($module[0]);
        return view('admin.users.create', compact('module_name', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        // return $data;
        $this->userRepository->store($data);
        return redirect('users');
    }

    public function create_user(Request $request)
    {
        // return $request;
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|min:9|max:12',
        //     'gender' => 'required',
        //     'country' => 'required',
        //     'phone' => 'numeric',
        // ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $data['image'] = 'default.png';
        // return $data;
        $this->userRepository->store($data);

        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->userRepository->get($id);

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.users.view', compact('user', 'module_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = ['Egypt', 'KSA'];
        $user = $this->userRepository->get($id);
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = 'Edit ' . Str::singular($module[0]);
        return view('admin.users.edit', compact('user', 'module_name', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequestEdit $request, $id)
    {
        $this->userRepository->update($id, $request->all());

        return redirect('users');
    }

    public function update_user(Request $request, $id)
    {
        // return $request;
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'gender' => 'required',
        //     'country' => 'required',
        //     'phone' => 'numeric|phone|size:11',
        // ]);

        $this->userRepository->update($id, $request->all());

        return redirect('users');
    }

    // salman join requests table 2 functions
    public function list_inactive_users(Request $request)
    {
        // dd('jihuhiuhohui');
        if ($request->ajax()) {
            $data = $this->userRepository->get_inactive_users();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '
                        <form id="delete-form" method="POST" action="/requests/' . $row->id . '" style="display:inline-block">
                        ' . csrf_field() . '
                        <button type="submit" class="edit btn btn-primary btn-sm">
                        <i class="mdi mdi mdi-account-check btn-icon-prepend"></i>
                            '.trans('data.Activate').'
                        </button>
                    </form> &nbsp
                    <a href="/requests/' . $row->id . '/show" class="edit btn btn-success btn-sm">
                            <i class="mdi mdi-eye btn-icon-prepend"></i>
                            '.trans('data.View').'
                        </a>
                    ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.users.requests', compact('module_name'));
    }
    public function action(Request $request, $id)
    {

        $this->userRepository->activate_user($id);

        return redirect('inactive');
    }
    //end salman join requests table
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userRepository->delete($id);

        return redirect('users');
    }

    public function educational($id)
    {
        $grade=$this->userRepository->user_grade($id);
        $level=$this->userRepository->user_level($id);
        $new_grade=new GradeRepository();
        $get_gradename= $new_grade->get($grade->grade_id);
        $get_levelename= $new_grade->get($level->grade_id);
        $grade_name=$get_gradename->name_en;
        $level_name=$get_levelename->name_en;

        return compact('grade_name','level_name');
    }

    public function addDescription($id){
        $row = Description::where('user_id',$id)->first();
        $module_name = trans('Add Description');
        return view('admin.users.description', compact('id','module_name','row'));
    }

    public function storeDescription(Request $request,Description $description,$id){
        $row = $description->where('user_id',$id)->first();
        if(!$row){
            $description->create([
                'user_id'=>$id,
                'description'=> $request['description']
            ]);
        }else{
            $row->description = $request['description'];
            $row->update();
        }

        return redirect('users');
    }
}
