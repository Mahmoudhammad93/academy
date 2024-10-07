<?php

namespace App\Http\Controllers\backend\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    public function quizzes(){

        $class = get_called_class(); // or $class = static::class; 
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('student.quizzes.index',compact('module_name'));

    }
}
