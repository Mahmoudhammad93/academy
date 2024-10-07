<?php

namespace App\Http\Controllers\backend\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    public function assignment_grade(){

        $class = get_called_class(); // or $class = static::class; 
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('teacher.assignments.grade',compact('module_name'));

    }
}
