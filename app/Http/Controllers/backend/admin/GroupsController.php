<?php

namespace App\Http\Controllers\backend\admin;
use App\Http\Controllers\Controller;

use App\Repositories\Group\GroupRepositoryInterface;
use App\Repositories\Country\CountryRepository;
use App\Repositories\Grade\GradeRepository;
use App\Repositories\Subject\SubjectRepository;
use App\Repositories\Term\TermRepository;

use Illuminate\Http\Request;
use DataTables;
use Str;
use Auth;

class GroupsController extends Controller
{
    private $groupRepository;

    public function __construct(GroupRepositoryInterface $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }

    public function index(Request $request)
    {
        
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.groups.index', compact('module_name'));
    }

    public function create()
    {
        $countries=new CountryRepository;
        $countries_data=$countries->getAll();

        $grades=new GradeRepository;
        $grades_data=$grades->get_grades_for_group();

        $subjects=new SubjectRepository;
        $subjects_data=$subjects->getAll();

        $Terms=new TermRepository;
        $Terms_data=$Terms->getAll();

        $user=Auth::user();

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        $data=array();
        $data['countries']= $countries_data;
        $data['grades']   = $grades_data;
        $data['subjects'] = $subjects_data;
        $data['terms']    = $Terms_data;
        $data['user']     = $user;

        // dd($countries_data);
        return view('admin.groups.create', compact('data','module_name'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     '' => '',
            
        // ]);

dd($request);
        // $data=$this->paymentRepository->store($request->all());
        // // dd($data);
        // return redirect('payments');
    }

}
