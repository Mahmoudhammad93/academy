<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Curriculum;
use App\Repositories\Curriculum\CurriculumRepositoryInterface;
use Illuminate\Http\Request;

use DataTables;

class CurriculumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $curriculumRepository;

    public function __construct(CurriculumRepositoryInterface $curriculumRepository)
    {
        $this->curriculumRepository = $curriculumRepository;
    }

    public function index(Request $request)
    {
        // return $this->curriculumRepository->getAll();

        if ($request->ajax()) {
            $data = $this->curriculumRepository->getAll();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('units', function ($row) {
                    $btn = '
                        <a href="/curriculum/'.$row->id.'/units" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-plus btn-icon-prepend"></i>
                            '.trans('data.Units').'
                        </a>
                    ';

                    return $btn;
                })
                ->addColumn('action', function ($row) {

                    $btn = '
                        <a href="curriculums/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '.trans('data.Edit').'
                        </a> &nbsp;
                        <form id="delete-form" method="POST" action="curriculums/' . $row->id . '" style="display:inline-block">
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
                ->rawColumns(['action','units'])
                ->make(true);
        }

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.curriculums.index',compact('module_name'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.curriculums.create',compact('module_name','courses'));
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
            'name_en' => 'required',
            'name_ar' => 'required',
            'price' => 'required',
        ]);

        $this->curriculumRepository->store($request->all());
        return redirect()->back();
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
        $courses = Course::all();
        $curriculum = $this->curriculumRepository->get($id);

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.curriculums.edit',compact('curriculum','courses','module_name'));
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
            'name_en' => 'required',
            'name_ar' => 'required',
            'price' => 'required',
        ]);

        $this->curriculumRepository->update($id,$request->all());
        return redirect('curriculums');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->curriculumRepository->delete($id);
        return redirect('curriculums');
    }

    public function courseCurriculums(Request $request,$id){
        // return $id;
        //  return response()->json(Curriculum::where('course_id',$id)->get());
        if ($request->ajax()) {
            $data = Curriculum::where('course_id',$id)->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('units', function ($row) {
                    $btn = '
                        <a href="/curriculums/'.$row->id.'/units" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-plus btn-icon-prepend"></i>
                            '.trans('data.Units').'
                        </a>
                    ';

                    return $btn;
                })
                ->addColumn('action', function ($row) {

                    $btn = '
                        <a href="curriculums/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '.trans('data.Edit').'
                        </a> &nbsp;
                        <form id="delete-form" method="POST" action="curriculums/' . $row->id . '" style="display:inline-block">
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
                ->rawColumns(['action','units'])
                ->make(true);
        }

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.curriculums.index',compact('module_name','id'));

    }
}
