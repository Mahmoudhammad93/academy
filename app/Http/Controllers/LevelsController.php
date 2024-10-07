<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\EducationType;
use App\Models\Grade;
use Illuminate\Http\Request;
use stdClass;

class LevelsController extends Controller
{
    public function index(Request $request,EducationType $eduObject,Grade $grade){
        if ($request->ajax()) {
            $levels = Grade::where('parent_id',$grade->id)->get();
            return datatables()::of($levels)
                ->addIndexColumn()
                ->addColumn('action', function ($row) use ($grade, $eduObject){
                    $btn = '
                        <a href="'.route("levels.edit",[$eduObject->id,$grade->id,$row->id]).'" class="edit btn btn-primary btn-sm">
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
        return view('admin.grades.levels.index',compact('module_name','grade','eduObject'));
    }

    public function create(Request $request,EducationType $eduObject, Grade $grade){
        $grades = Grade::where('id', $grade->id)->get();
        $module_name = "Levels";
        return view('admin.grades.levels.create', compact('module_name', 'grades','grade','eduObject'));
    }

    public function store(Request $request,EducationType $eduObject ,Grade $grade){
        $request->validate([
            'name_en'=>'required|min:4',
            'name_ar'=>'required|min:4',
            'parent_id'=>'required|exists:grades,id'
        ]);
        Grade::create($request->all());
        return redirect()->route('levels.index', [$eduObject,$grade->id]);
    }

    public function edit(Request $request,EducationType $eduObject, Grade $grade, Grade $level){
        $grades = Grade::where('parent_id', 0)->get();
        $module_name = "Levels";
        return view('admin.grades.levels.edit', compact('module_name', 'grades','grade', 'level','eduObject'));
    }

    public function update(Request $request,EducationType $eduObject, Grade $grade, Grade $level){
        $request->validate([
            'name_en'=>'required|min:4',
            'name_ar'=>'required|min:4',
            'parent_id'=>'required|exists:grades,id'
        ]);
        $level->update($request->all());
        return redirect()->route('levels.index', [$eduObject,$grade->id]);
    }

    public function delete(Request $request,EducationType $eduObject, Grade $grade, Grade $level){
        return $level->delete();
    }
}
