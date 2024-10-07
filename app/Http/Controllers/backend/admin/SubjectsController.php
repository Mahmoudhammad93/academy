<?php

namespace App\Http\Controllers\backend\admin;
use App\Http\Controllers\Controller;

use App\Http\Requests\SubjectRequest;
use App\Repositories\Subject\SubjectRepositoryInterface;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Str;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $subjectRepository;

    public function __construct(SubjectRepositoryInterface $subjectRepository)
    {
        $this->subjectRepository = $subjectRepository;
    }

    public function index(Request $request)
    {
        // return $this->subjectRepository->getAll();
        if ($request->ajax()) {
            $data = $this->subjectRepository->getAll();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    $img = '<img src="' . asset("storage/file/" . $row->image) . '" width="50" height="50">';
                    return $img;
                })
                ->addColumn('action', function ($row) {

                    $btn = '
                        <a href="subjects/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '.trans('data.Edit').'
                        </a> &nbsp;
                        <form id="delete-form" method="POST" action="subjects/' . $row->id . '" style="display:inline-block">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="submit" class="btn btn-danger btn-icon-text">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                '.trans('data.Delete').'
                            </button>
                        </form>
                    ';

                    return $btn;
                })
                ->rawColumns(['action', 'image'])
                ->make(true);
        }
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.subjects.index', compact('module_name'));
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
        $module_name = 'Create New ' . Str::singular($module[0]);

        return view('admin.subjects.create', compact('module_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectRequest $request)
    {
        // upload subject image
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('storage/file'), $filename);

        // save image
        $data = $request->all();
        $data['image'] = $filename;
        // return $data;

        // add subject
        $this->subjectRepository->store($data);

        return redirect('subjects');
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
        $subject = $this->subjectRepository->get($id);

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = 'Edit ' . Str::singular($module[0]);

        return view('admin.subjects.edit', compact('subject', 'module_name'));
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
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'code' => 'required',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('storage/file'), $filename);
            $data['image'] = $filename;

        }

        $this->subjectRepository->update($id,$data);

        return redirect('subjects');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->subjectRepository->delete($id);

        return redirect('subjects');
    }
}
