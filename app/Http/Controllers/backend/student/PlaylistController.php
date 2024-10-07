<?php

namespace App\Http\Controllers\backend\student;

use App\Http\Controllers\Controller;
use App\Models\CompletedLesson;
use App\Models\Course;
use App\Models\Curriculum;
use App\Models\Lesson;
use App\Models\Unit;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function playlist($course_slug, $curr_id, $unit_slug, $lesson_slug){
        // return $lesson_slug;
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('student.playlist.index',compact('module_name','course_slug','curr_id','unit_slug','lesson_slug'));

    }

    public function get_lesson($lesson_slug){
        $lesson = Lesson::where('slug', $lesson_slug)->first();
        return $lesson;
    }

    public function complete_lesson(Request $request, CompletedLesson $completedLesson ,$lesson_id){
        $enrol = Course::where('slug', $request['course_slug'])
        ->join('context_enrollments','context_enrollments.context_id','courses.id')
        ->where('user_id',auth()->user()->id)
        ->first();
        
        $lesson = Lesson::find($lesson_id);
        $curriculum = Curriculum::where('id', $lesson->unit_id)->first();
        $curriculum->lessons_complete ++;
        $curriculum->save();
        
        return $completedLesson->create([
            'enrol_id' => $enrol->id,
            'lesson_id' => $request['id']
        ]);
    }

    public function getCompletedLessons(){
        $lessons = CompletedLesson::all()->pluck('lesson_id');
        return $lessons;
    }

}
