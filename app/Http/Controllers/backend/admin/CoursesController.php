<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\ContextEnrollment;
use App\Models\Course;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Term;
use App\Models\User;
use App\Repositories\Course\CourseRepositoryInterface;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $coursesRepository;

    public function __construct(CourseRepositoryInterface $coursesRepository)
    {
        $this->coursesRepository = $coursesRepository;
    }

    public function index(Request $request)
    {
        // return $this->coursesRepository->getAll();
        if ($request->ajax()) {
            $data = $this->coursesRepository->getAll();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('timetable', function ($row) {

                    $btn = '
                        <a href="course/'.$row->id.'/timetable" class="btn btn-inverse-dark btn-fw btn-sm">
                            <i class="mdi mdi-timetable btn-icon-prepend"></i>
                        </a>
                    ';

                    return $btn;
                })
                ->addColumn('courseRole', function ($row) {

                    $btn = '
                        <a href="courses/'.$row->id.'/activites" class="btn btn-inverse-dark btn-fw btn-sm">
                            <i class="mdi mdi-anchor btn-icon-prepend"></i>

                        </a>
                    ';

                    return $btn;
                })
                ->addColumn('curriculum', function ($row) {

                    $btn = '
                        <a href="courses/'.$row->id.'/curriculums" class="btn btn-inverse-dark btn-fw btn-sm">
                            <i class="fa fa-paper-plane btn-icon-prepend"></i>
                        </a>
                    ';

                    return $btn;
                })

                ->addColumn('banks', function ($row) {

                    $btn = '
                    <a href="'.route('banks.index', $row->id).'" class="btn btn-primary btn-sm">
                    <i class="fa fa-eye btn-icon-prepend"></i>
                    '.trans('data.Banks').'

                    ';

                    return $btn;
                })

                ->addColumn('action', function ($row) {

                    $btn = '
                        <a href="courses/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                        </a>
                        <form id="delete-form" method="POST" action="courses/' . $row->id . '" style="display:inline-block">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="submit" class="btn btn-danger">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                            </button>
                        </form>

                    ';

                    return $btn;
                })



                ->rawColumns(['action','timetable','courseRole','curriculum','banks'])
                ->make(true);
        }

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.courses.index',compact('module_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::where('parent_id',0)->get();
        $levels = Grade::where('parent_id','!=',0)->get();
        // return $grades;
        $terms = Term::all();
        $subjects = Subject::all();
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.courses.create',compact('module_name','terms','subjects','grades','levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Course $course, Request $request)
    {
        // upload subject image
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('storage/file'), $filename);
        $course['image'] = $filename;
        $course['ilos'] = json_encode($request['ilos']);
        $course['name_en'] = $request['name_en'];
        $course['name_ar'] = $request['name_ar'];
        $course['code'] = $request['code'];
        $course['price'] = $request['price'];
        $course['grade_id'] = $request['grade_id'];
        $course['level_id'] = $request['level_id'];
        $course['term_id'] = $request['term_id'];
        $course['subject_id'] = $request['subject_id'];
        $course['description_en'] = $request['description_en'];
        $course['description_ar'] = $request['description_ar'];
        // add subject
        $course->save();
        
        $course->assignments()->create([
            'type'=>'course'
        ]);

        return redirect('courses');
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
        $grades = Grade::where('parent_id',0)->get();
        $levels = Grade::where('parent_id','!=',0)->get();

        $terms = Term::all();
        $subjects = Subject::all();
        $course = $this->coursesRepository->get($id);

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.courses.edit',compact('terms','subjects','course','grades','levels','module_name','id'));
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
        // return $request;
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'code' => 'required',
            'price' => 'required',
            'subject_id' => 'required',
            'term_id' => 'required',
            'grade_id' => 'required',
            'level_id' => 'required',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('storage/file'), $filename);
            $data['image'] = $filename;
            $data['ilos'] = json_encode($data['ilos']);

        }

        $this->coursesRepository->update($id,$data);

        return redirect('courses');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->assignments()->where('assignmentable_id',$id)->delete();
        $course->delete();
        return redirect('courses');
    }

    public function courseRole(Request $request,$id){

        // $usersEnroles = ContextEnrollment::where('context_id',$id)->get();
        $data = DB::table('context_enrollments')
            ->join('users','users.id','context_enrollments.user_id')
            ->join('roles','roles.id','context_enrollments.role')
            ->where('context_id',$id)
            ->select('users.name as user_name','roles.id','roles.name as role','context_enrollments.status')
            ->get();
        // return $usersEnroles;
        if ($request->ajax()) {
            $data = DB::table('context_enrollments')
            ->join('users','users.id','context_enrollments.user_id')
            ->join('roles','roles.id','context_enrollments.role')
            ->where('context_id',$id)
            ->select('users.name as user_name','context_enrollments.id','roles.name as role','context_enrollments.status')
            ->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '
                    <form id="delete-form" method="POST" action="/role/' . $row->id . '/delete" style="display:inline-block">
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
            ->rawColumns(['action'])
            ->make(true);
        }

        // return $usersEnroles;
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0].' Enrollement';

        return view('admin.courses.role.index',compact('module_name','id'));
    }

    public function getData($id){
        // return $id;
        $assignedTeachers = DB::table('context_enrollments')
                            ->join('roles','roles.id','context_enrollments.role')
                            ->where('context_enrollments.context_id',$id)
                            ->where('roles.name','teacher')
                            ->distinct()
                            ->pluck('context_enrollments.user_id')->toArray();
        // return $assignedTeachers;

        $assignedRoleCourse = DB::table('context_enrollments')
                            ->join('roles','roles.id','context_enrollments.role')
                            ->where('context_enrollments.context_id',$id)
                            ->where('roles.name','teacher')
                            ->distinct()
                            ->pluck('context_enrollments.role')->toArray();
        // return $assignedRoleCourse;
        $users = User::whereNotIn('id',$assignedTeachers)->get();
        // $users = User::where('account_type','teacher')
        //                ->whereNotIn('id',$assignedTeachers)->get();

        $roles = Role::whereNotIn('name',['super_admin','admin'])
                        ->whereNotIn('id',$assignedRoleCourse)
                        ->get();
        $roles = [["id"=>1,"name"=>"teacher"], ["id"=>2,"name"=>"assesstant"], ["id"=>3,"name"=>"student"]];
        return ['users' => $users, 'roles' => $roles];
    }

    public function assignCourseRole(Request $request,$id){

        // return $request;
        $request->validate([
            'user_id' => 'required',
            'role' => 'required',
            'status' => 'required',
        ]);

        $userCourse = new ContextEnrollment;
        $userCourse->user_id = $request->user_id;
        $userCourse->context_type = 'course';
        $userCourse->context_id = $id;
        $userCourse->role = $request->role;
        $userCourse->status = $request->status;
        $userCourse->save();

        return redirect(route('courseRole',$id));
    }

    public function deleteCourseRole($id){
        // return $id;
        $role = ContextEnrollment::find($id)->delete();
        return redirect()->back();
    }

    public function get_ilos($id){
        $row = Course::where('id', $id)->first();
        $ilos = json_decode($row->ilos);
        return $ilos;
    }

}
