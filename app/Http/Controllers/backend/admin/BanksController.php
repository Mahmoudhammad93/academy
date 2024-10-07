<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Course;
use App\Models\Unit;
use App\Repositories\Bank\BankRepositoryInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BanksController extends Controller
{

    private $BankRepository;
    public function __construct(BankRepositoryInterface $BankRepository)
    {
        $this->BankRepository = $BankRepository;
    }



    public function index(Request $request,Course $course)
    {

        if ($request->ajax()) {
            $data = $this->BankRepository->getCourseBanks($course->id);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) use ($course) {

                    $btn = '
                        <a href="'.route('banks.edit',[$course->id, $row->id] ).'" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>

                        </a> &nbsp;
                        <button class="ajax_delete btn btn-danger " data="' . $row->id . '">
                            <i class="mdi mdi-delete btn-icon-prepend"></i>

                        </button>
                        <a class="btn btn-dark fa fa-eye" href="' . route('questions.index', [$course->id, $row->id]) . '">
                            <i class=""></i>

                        </a>
                    ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $module_name = 'Banks';
        $course_id =$course->id;
        return view('admin.banks.index', compact('module_name', 'course_id'));
    }

    public function create(Course $course){
        $module_name = "Banks";
        return view('admin.banks.create', compact('module_name', 'course'));
    }
    public function store(Request $request, Course $course){
        $request->validate([
            'title' => 'required',
            'course_id' => 'required|exists:courses,id'
        ]);
        Bank::create($request->all());
        return redirect()->route('banks.index',$course->id);
    }

    public function edit(Request $request, Course $course, Bank $bank){
        $module_name = "Banks";
        return view('admin.banks.edit', compact('module_name', 'course', 'bank'));
    }

    public function update(Request $request, Course $course, Bank $bank){
        $request->validate([
            'title' => 'required',
            'course_id' => 'required|exists:courses,id'
        ]);
        $bank->update($request->all());
        return redirect()->route('banks.index',$course->id);
    }

    public function delete(Request $request, Course $course, Bank $bank){
        return $bank->delete();
    }

}
