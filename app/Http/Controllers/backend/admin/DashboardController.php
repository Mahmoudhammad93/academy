<?php

namespace App\Http\Controllers\backend\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller',$controller_name);
        $module_name = $module[0];
        if(auth()->user()->account_type !== 'student')
            return view('admin.dashboard',compact('module_name'));
        else
            return view('student.dashboard',compact('module_name'));
    }
}
