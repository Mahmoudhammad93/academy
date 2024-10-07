<?php

namespace App\Http\Controllers\backend\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizGradeController extends Controller
{
    public function quiz_grade(){

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('teacher.quiz_grade.grade',compact('module_name'));

    }
}
