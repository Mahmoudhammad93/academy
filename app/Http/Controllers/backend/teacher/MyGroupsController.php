<?php


namespace App\Http\Controllers\backend\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyGroupsController extends Controller
{
    
    public function myGroups(){

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];
        
        return view('teacher.groups.index',compact('module_name'));
        
    }
    public function createGroup(){

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];
        
        return view('teacher.groups.add',compact('module_name'));
        
    }
    public function viewGroup(){

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];
        
        return view('teacher.groups.view',compact('module_name'));
        
    }
}
