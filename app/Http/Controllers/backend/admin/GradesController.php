<?php

namespace App\Http\Controllers\backend\admin;
use App\Http\Controllers\Controller;

use App\Http\Requests\GradeRequest;
use App\Models\Country;
use App\Models\EducationType;
use App\Models\Grade;
use App\Repositories\Grade\GradeRepositoryInterface;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Str;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $gradesRepository;

    public function __construct(GradeRepositoryInterface $gradesRepository)
    {
        $this->gradesRepository = $gradesRepository;
    }

    public function index(Request $request, EducationType $eduObject)
    {
        if ($request->ajax()) {
            $data = $this->gradesRepository->getAll($eduObject);
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('levels', function ($row) use ($eduObject){

                    $btn = '
                        <a href="'.route("levels.index", [$eduObject->id,$row->id]).'" class="edit btn btn-dark fa fa-eye btn-sm">
                            <i class="mdi mdi-eyes btn-icon-prepend"></i>
                            '. __('data.Levels').'
                        </a>
                    ';

                    return $btn;
                })
                ->addColumn('action', function ($row) use ($eduObject){
                    $btn = '
                        <a href="'.route('grades.edit', [$eduObject, $row->id]).'" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '.trans('data.Edit').'
                        </a> &nbsp;
                        <button class="ajax_delete btn btn-danger " data="' . $row->id . '">
                            <i class="mdi mdi-delete btn-icon-prepend"></i>

                        </button>
                    ';
                    return $btn;
                })
                ->rawColumns(['action','levels'])
                ->make(true);
        }
        $module_name= "Grades";
        return view('admin.grades.index',compact('module_name', 'eduObject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, EducationType $eduObject)
    {
        $module_name = 'Grades';
        return view('admin.grades.create',compact('module_name', 'eduObject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GradeRequest $request, EducationType $eduObject)
    {
        $data = $request->all();
        $data['parent_id']=0;
        $this->gradesRepository->store($data);
        return redirect()->route('grades.index', [$eduObject->id]);
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
    public function edit(Request $request,EducationType $eduObject ,Grade $grade)
    {
        $grade = $this->gradesRepository->get($grade->id);
        $grades = Grade::where('parent_id',0)->get();
        $module_name= "Grades";
        return view('admin.grades.edit',compact('grade','grades','module_name','eduObject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GradeRequest $request, EducationType $eduObject ,Grade $grade)
    {
        $this->gradesRepository->update($grade->id,$request->all());
        return redirect()->route('grades.index', [$eduObject, $grade]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->gradesRepository->delete($id);
        return back();
    }
    public function getLevels(Request $request,$id){
        $data = Grade::where('parent_id',$id)->get();
        if ($request->ajax()) {
            $data = Grade::where('parent_id',$id)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '
                        <a href="'.route("grades.edit",$row->id).'" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '. __('data.Edit').'
                        </a> &nbsp;
                        <button class="ajax_delete btn btn-danger " data="' . $row->id . '">
                            <i class="mdi mdi-delete btn-icon-prepend"></i>
                        </button>
                    ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $module_name = "Levels";


        return view('admin.grades.levels.index',compact('module_name','id'));
    }

    public function delete(Grade $grade){
        $grade->delete();
    }
}
