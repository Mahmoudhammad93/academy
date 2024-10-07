<?php

namespace App\Http\Controllers\backend;

use App\Repositories\Library\LibraryRepositoryInterface;
use App\Repositories\Course\CourseRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DataTables;

class LibraryController extends Controller
{
    private $libraryRepository;

    public function __construct(LibraryRepositoryInterface $libraryRepository)
    {
        $this->libraryRepository = $libraryRepository;
    }


    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->libraryRepository->getAll();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '
                        <a href="library/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            Edit
                        </a> &nbsp;
                        <form id="delete-form" method="POST" action="library/' . $row->id . '" style="display:inline-block">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="submit" class="btn btn-danger btn-icon-text">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                Delete
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
        $module_name =$module[0];

        return view('library.index', compact('module_name'));
    }

    public function create()
    {
        $courses=new CourseRepository();
        $all_courses=$courses->getAll();

        // dd($all_courses);
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name =  $module[0];

        return view('library.create', compact('module_name','all_courses'));
    }

    public function store(Request $request)
    {
        // dd($request);
        /**new */
        $request->validate([
            'title' => 'required|string',
            'file_type' => 'required|string',

        ]);

        if($request->file('path'))
        {
            $file = $request->file('path');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('storage/file'), $filename);

            // save image
            $data = $request->all();
            $data['path'] = $filename;
            $data['file_extension'] = $extension;
        }
        else
        {
            $data = $request->all();
        }

        // dd($data);
        $data=$this->libraryRepository->store($data);
        // dd($data);
        return redirect('library');
    }

    public function edit($id)
    {
        $courses=new CourseRepository();
        $all_courses=$courses->getAll();
        $library = $this->libraryRepository->get($id);
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('library.edit', compact('library', 'module_name','all_courses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'file_type' => 'required|string',

        ]);
        if($request->file('path'))
        {
            $file = $request->file('path');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('storage/file'), $filename);

            // save image
            $data = $request->all();
            $data['path'] = $filename;
            $data['file_extension'] = $extension;

        }
        else
        {
            $data = $request->all();
        }

        $this->libraryRepository->update($id, $data);

        return redirect('library');
    }

    public function destroy($id)
    {
        $this->libraryRepository->delete($id);
        return redirect('library');
    }

    public function my_library(Request $request)
    {
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name =$module[0];

        return view('library.my_index', compact('module_name'));
    }

    public function show(Request $request,$type)
    {
        if ($request->ajax()) {
            $data = $this->libraryRepository->show($type);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '
                        <a href="/library/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            Edit
                        </a> &nbsp;
                        <form id="delete-form" method="POST" action="/library/' . $row->id . '" style="display:inline-block">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="submit" class="btn btn-danger btn-icon-text">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                Delete
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
        $module_name =$module[0];
        $file_type=$type;
        return view('library.show', compact('module_name','file_type'));
    }
}
