<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Models\ContextEnrollment;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CourseActivitiesController extends Controller
{
    public function courseActivities(Request $request,$course_id){

        $module_name = trans('Activities');

        $teacher = User::join('context_enrollments','context_enrollments.user_id','users.id')
        ->where('context_enrollments.context_id', $course_id)
        ->where('context_enrollments.role', 'teacher')
        ->first();
        // $assesstants = User::join('context_enrollments','context_enrollments.user_id','users.id')
        // ->where('context_enrollments.context_id', $course_id)
        // ->where('context_enrollments.role', 'assesstant')
        // ->get();
        // return $assesstants;
        if ($request->ajax()) {
            $assesstants = User::join('context_enrollments','context_enrollments.user_id','users.id')
            ->where('context_enrollments.context_id', $course_id)
            ->where('context_enrollments.role', 'assesstant')
            ->get();
            return DataTables::of($assesstants)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '
                        <form id="delete-form" method="POST" action="/assesstant/' . $row->id . '/delete" style="display:inline-block">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="submit" class="ajax_delete btn btn-danger" data="' . $row->id . '">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                            </button>
                        </form>

                    ';

                    return $btn;
                })



                ->rawColumns(['action'])
                ->make(true);
            }

        return view('admin.courses.activities.index',compact('module_name','course_id','teacher'));

    }

    public function deleteAssesstant(ContextEnrollment $context){
        return $context->delete();

    }

    public function deleteactitviesTeacher($id){
        $teacher = ContextEnrollment::where('user_id', $id)->delete();
        return redirect()->back();
    }
}
