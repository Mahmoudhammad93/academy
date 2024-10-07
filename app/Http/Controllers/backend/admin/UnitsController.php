<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\Curriculum;
use App\Models\Unit;
use App\Repositories\Unit\UnitRepositoryInterface;
use Illuminate\Http\Request;
use stdClass;
use Yajra\DataTables\Facades\DataTables;

class UnitsController extends Controller
{

    private $UnitRepository;
    public function __construct(UnitRepositoryInterface $UnitRepository)
    {
        $this->UnitRepository = $UnitRepository;
    }
    public function index2($id){
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];
        return view('admin.units.index',compact('module_name','id'));
    }

    public function index(Request $request, $id)
    {
        // $data = $this->UnitRepository->getUnitsByCurriculumId($id);
        $curriculum_id = $id;
        if ($request->ajax()) {
            $data = $this->UnitRepository->getUnitsByCurriculumId($id);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) use ($curriculum_id) {
                    $btn = '
                        <a href="'.route('units.edit',[$curriculum_id, $row->id] ).'" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>

                        </a> &nbsp;
                        <button class="ajax_delete btn btn-danger " data="' . $row->id . '">
                            <i class="mdi mdi-delete btn-icon-prepend"></i>
                        </button>
                    ';
                    return $btn;
                })
                ->addColumn('lessons', function($row) use ($curriculum_id){
                   $btn=' <a href="'.route('lessons.index',[$curriculum_id, $row->id] ).'" class="edit btn btn-primary btn-sm">
                            <i class="fa fa-book btn-icon-prepend"></i>

                        </a>';

                        return $btn;
                })
                ->rawColumns(['action', 'lessons'])
                ->make(true);
        }
        $module_name = 'Units';

        return view('admin.units.index', compact('module_name','id'));
    }

    public function getUnits($id){
        $units = Unit::where('curriculum_id',$id)->get();
        return $units;
    }
    public function addUnit(Request $request)
    {
        $unit = new Unit;
        $unit->name_en = $request['name_en'];
        $unit->name_ar = $request['name_ar'];
        $unit->curriculum_id = $request['id'];
        $unit->save();
        return $unit;
    }

    public function edit(Curriculum $curriculum, Unit $unit){
        $module_name="Units";
        return view("admin.units.edit", compact('curriculum', 'unit', 'module_name'));
    }
    public function create(Curriculum $curriculum, Unit $unit){
        $module_name="Units";
        return view("admin.units.create", compact('curriculum', 'unit', 'module_name'));
    }

    public function update(Request $request, Curriculum $curriculum, Unit $unit){
        $unit->name_ar = $request->name_ar;
        $unit->name_en = $request->name_en;
        $unit->save();
        return redirect()->route('units.index', [$curriculum->id]);

    }

    public function store(Request $request, Curriculum $curriculum){
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);
        $unit = new Unit();
        $unit->name_en= $request->name_en;
        $unit->name_ar= $request->name_ar;
        $unit->curriculum_id = $curriculum->id;
        $unit->save();
        $unit->assignments()->create([
            'type'=>'unit'
        ]);
        return redirect()->route('units.index',[$curriculum->id]);
    }

    public function delete(Curriculum $curriculum, $unit){
        $unit = Unit::find($unit);
        $unit->assignments()->where('assignmentable_id',$unit)->delete();
        $unit->delete();
        return redirect()->route('units.index', $curriculum->id);
    }
}
