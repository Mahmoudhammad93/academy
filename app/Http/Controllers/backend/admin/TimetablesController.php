<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TimetableRequest;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\CourseTimetable;
use Illuminate\Http\Request;

class TimetablesController extends Controller
{
    //
    public function index()
    {
        $courseId = 1;
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $single_name = explode('s', $module[0]);
        // return $single_name;
        $module_name = $single_name[0];
        return view('admin.timetable.index', compact('module_name','courseId'));
    }

    public function create()
    {

        $days = ['Saturday', 'Sunday', 'Monday', 'Tuseday', 'Wednesday', 'Thursday', 'Friday'];
        $weeks = [1 => 'First Week', 2 => 'Second Week', 3 => 'Third Week', 4 => 'Fourth Week'];
        $months = [
            1 => 'January', 2 => 'February', 3 => 'March',
            4 => 'April', 5 => 'May', 6 => 'June',
            7 => 'July', 8 => 'August', 9 => 'September',
            10 => 'October', 11 => 'November', 12 => 'December'
        ];

        $years = [2015,2016,2017,2018,2019,2020,
                  2021,2022,2023,2024,2025,2026,2027,2028,2029,2030];

        $from = [7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22];
        $courses = Course::all();

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $single_name = explode('s', $module[0]);
        $module_name = $single_name[0];

        return view('admin.timetable.create', compact('module_name','days','weeks','months','years','from','courses'));
    }

    public function store(TimetableRequest $request){

        // return $request;
        $id = $request['course_id'];
        $request['to'] = $request['from'] +2;
        // return $request;
        CourseTimetable::create($request->all());
        return redirect(route('courseTimetable',$id));

    }

    public function destroy($id){

        CourseTimetable::destroy($id);
    }

    public function courseTimetable($id){
        // return $id;

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $single_name = explode('s', $module[0]);
        // return $single_name;
        $module_name = $single_name[0];
        return view('admin.timetable.index', compact('module_name','id'));
    }

    public function getTimetable(Request $request,$courseId){
        $lessons = courseTimetable::where('course_id',$courseId)
        ->where('month', $request['monthNumber'])
        ->where('week', $request['weekNumber'])
        ->get();

        return $lessons;

    }

}
