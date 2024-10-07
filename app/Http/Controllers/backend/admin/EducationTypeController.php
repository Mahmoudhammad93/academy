<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\EducationType;
use App\Repositories\EducationType\EducationTypeRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EducationTypeController extends Controller
{
    private $educationType;
    public function __construct(EducationTypeRepository $educationType)
    {
        $this->educationType= $educationType;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->educationType->getAll();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('grades', function($row){
                    return '
                            <a href="'.route("grades.index", $row->id).'" class="edit btn btn-dark fa fa-eye btn-sm">
                            <i class="mdi mdi-eyes btn-icon-prepend"></i>
                            '. __('data.Grades').'
                        </a>
                    ';
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                        <a href="'.route('education_types.edit',[$row->id] ).'" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                        </a> &nbsp;
                        <button class="ajax_delete btn btn-danger " data="' . $row->id . '">
                            <i class="mdi mdi-delete btn-icon-prepend"></i>
                        </button>

                    ';
                    return $btn;
                })
                ->removeColumn('country_id')
                ->addColumn('country', function($row){
                    $country = Country::find($row->country_id);
                    $name="name_".app()->getLocale();
                    return $country->$name;
                })
                ->rawColumns(['action', 'grades'])
                ->make(true);
        }

        $module_name = 'Education Type';
        return view('admin.education_types.index', compact('module_name'));
    }

    public function create(Request $request){
        $module_name = "EducationType";
        $countries = Country::all();
        return view('admin.education_types.create', compact('module_name','countries'));
    }

    public function store(Request $request){
        $request->validate([
            'name_en'=>'required|min:4',
            'name_ar'=>'required|min:4',
            'country_id'=>'required|exists:countries,id'
        ]);
        $module_name = "EducationType";
        EducationType::create($request->all());
        return redirect()->route('education_types.index', compact('module_name'));

    }

    public function edit(Request $request, EducationType $education_type){
        $countries = Country::all();
        $module_name = "EducationType";
        return view('admin.education_types.edit', compact('education_type', 'countries', 'module_name'));
    }

    public function update(Request $request, EducationType $education_type){
        $request->validate([
            'name_en'=>'required|min:4',
            'name_ar'=>'required|min:4',
            'country_id'=>'required|exists:countries,id'
        ]);
        $education_type->update($request->all());
        return redirect()->route('education_types.index');
    }

    public function delete(Request $request,EducationType $educationType){
        $educationType->delete();
    }

}
