<?php

namespace App\Http\Controllers\backend\admin;
use App\Http\Controllers\Controller;

use App\Repositories\School\SchoolRepositoryInterface;
use Illuminate\Http\Request;
use DataTables;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $schoolRepository;

    public function __construct(SchoolRepositoryInterface $schoolRepository)
    {
        $this->schoolRepository = $schoolRepository;
    }

    public function index(Request $request)
    {
        // return $this->schoolRepository->getAll();

        if ($request->ajax()) {
            $data = $this->schoolRepository->getAll();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '
                        <a href="schools/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '. __('data.Edit').'
                        </a> &nbsp;
                        <form id="delete-form" method="POST" action="schools/' . $row->id . '" style="display:inline-block">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="submit" class="btn btn-danger btn-icon-text">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                '. __('data.Delete').'
                            </button>
                        </form>
                    ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.schools.index', compact('module_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.schools.create', compact('module_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);

        $this->schoolRepository->store($request->all());

        return redirect('schools');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        $school = $this->schoolRepository->get($id);

        return view('admin.schools.edit', compact('school', 'module_name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);

        $this->schoolRepository->update($id, $request->all());

        return redirect('schools');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->schoolRepository->delete($id);
        return redirect('schools');
    }
}
