<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function parent_signup(){

        $class = get_called_class(); // or $class = static::class; 
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('auth.signup.parent_signup',compact('module_name'));

    }
    public function teacher_signup(){

        $class = get_called_class(); // or $class = static::class; 
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('auth.signup.teacher_signup',compact('module_name'));

    }
    public function student_signup(){

        $class = get_called_class(); // or $class = static::class; 
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('auth.signup.student_signup',compact('module_name'));

    }
    public function general_signup(){

        $class = get_called_class(); // or $class = static::class; 
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('auth.signup.general_signup',compact('module_name'));

    }
}
