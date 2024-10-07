<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassroomRequest;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Unit;
use App\Repositories\Classroom\ClassroomRepositoryInterface;
use Illuminate\Http\Request;
use DataTables;

class ClassroomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $classroomRepository;

    public function __construct(ClassroomRepositoryInterface $classroomRepository)
    {
        $this->classroomRepository = $classroomRepository;
    }

    public function index(Request $request)
    {
        // return $this->classroomRepository->getAll();

        if ($request->ajax()) {
            $data =$this->classroomRepository->getAll();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '
                        <a href="classrooms/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '. __('data.Edit').'
                        </a> &nbsp;
                        <form id="delete-form" method="POST" action="classrooms/' . $row->id . '" style="display:inline-block">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="submit" class="btn btn-danger btn-icon-text">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                '. __('data.Delete').'
                            </button>
                        </form>
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

        return view('admin.classrooms.index',compact('module_name'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $units = Unit::all();
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.classrooms.create',compact('module_name','courses','units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassroomRequest $request)
    {
        // return $request;
        $this->classroomRepository->store($request->all());
        return redirect('classrooms');
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
        $classroom = $this->classroomRepository->get($id);

        $courses = Course::all();
        $units = Unit::all();
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.classrooms.edit',compact('classroom','courses','units','module_name'));
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
            'room_id'=> 'required',
            'name_en'=> 'required',
            'name_ar'=> 'required',
            'course_id'=> 'required',
            'unit_id'=> 'required',
        ]);

        $this->classroomRepository->update($id,$request->all());
        return redirect('classrooms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->classroomRepository->delete($id);
        return redirect('classrooms');
    }
}
