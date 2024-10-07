<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use App\Models\Lesson;
use App\Models\Unit;
use Illuminate\Http\Request;
use DataTables;

class LessonsController extends Controller
{
    //
    public function index(Request $request, Curriculum $curriculum, Unit $unit){
        $data= Lesson::where('unit_id', $unit->id)->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) use ($curriculum, $unit){

                    $btn = '
                        <a href="'.route('lessons.edit', [$curriculum->id, $unit->id]).'" class="edit btn btn-primary btn-sm">
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
    }

    public function create(Request $request, $curriculum_id, $unit_id){
        $data = Lesson::where('unit_id', $unit_id)->get();
        // return $unit_id;
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) use ($curriculum_id) {

                    $btn = '
                        <a href="/lesson/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '. __('data.Edit').'
                        </a> &nbsp;
                        <form id="delete-form" method="POST" action="/curriculum/'.$curriculum_id.'/lesson/' . $row->id . '/delete" style="display:inline-block">
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
        // return $data;
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.lessons.create', compact('module_name', 'unit_id','curriculum_id','data'));
    }


    public function store(Request $request,Unit $unit, $unit_id){
        // return $request;
        // return $unit->lessons()->create([
        //     'name' => $request->video->getClientOriginalName(),
        //     'path' => $request->video->store("units/".$unit->id, 'public'),
        //     'type' => $request->type,
        //     'description' => "",
        // ]);


        $row = new Lesson;
        $row->name = $request['name'];
        $row->type = $request['type'];
        // $file = $request->file('video');
        // $fileResult = $file->move(public_path('file'), $file->getClientOriginalName());
        $row->path = $request->file('video')->store("units/".$unit->id, 'public');
        $row->description = "";
        $row->unit_id = $unit_id;

        $row->save();


        $lessons = Lesson::where('unit_id', $row->unit_id)->get();
        $curriculum = Curriculum::where('id', $row->unit_id)->first();
        $curriculum->count_lessons = count($lessons);
        $curriculum->save();

        return ['lessons' => $row, 'count' => $curriculum];
        
        // return $row;
    }

    public function getLessons($id){
        $lessons = Lesson::where('unit_id',$id)->get();
        return $lessons;
    }

    public function deleteLesson($curriculum_id,$id){
        $lesson = Lesson::find($id)->delete();
        $curriculum = Curriculum::where('id', $curriculum_id)->first();
        $curriculum->count_lessons --;
        $curriculum->save();
        return redirect()->back();
    }

    public function edit($id){

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = 'Edit '.$module[0];

        return view('admin.lessons.edit', compact('module_name','id'));
    }

    public function getLesson($id){
        $lesson = Lesson::find($id);
        return $lesson;
    }

    public function update_lesson(Request $request, $id){
        $row = Lesson::find($id);
        $row->name = $request['name'];
        $row->type = $request['type'];
        $row->path = $request['path'];
        $row->description = $request['description'];

        $row->save();
        return $row;
    }
}
