<?php

namespace App\Http\Controllers\backend\admin;
use anlutro\LaravelSettings\Facade as Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function index(){
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];
        return view('admin.settings.index',compact('module_name'));
    }

    public function store(Request $request){
        // upload logo image
        $file = $request['site_logo'];
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('storage/file'), $filename);

        Setting::set('site_name', $request['site_name']);
        Setting::set( 'site_logo', $filename);
        Setting::save();
    }
}
