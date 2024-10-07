<?php


namespace App\Http\Controllers\backend\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\Page\PageRepositoryInterface;
use DataTables;
use Str;

class PagesController extends Controller
{
    private $PageRepository;
    public function __construct(PageRepositoryInterface $PageRepository)
    {
        $this->PageRepository = $PageRepository;
    }

    public function index(Request $request)
    {
        
        if ($request->ajax()) {
            $data = $this->PageRepository->getAll();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '
                        <a href="pages/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '. __('data.Edit').'
                        </a> &nbsp;
                        <form id="delete-form" method="POST" action="pages/' . $row->id . '" style="display:inline-block">
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

        return view('admin.pages.index', compact('module_name'));
    }

    public function create()
    {
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('admin.pages.create', compact('module_name'));
    }
    public function store(Request $request)
    {
        /**new */
        $request->validate([
            'name_en' => 'required|string',
            'name_ar'=>'required|string',
        ]);

        $data=$this->PageRepository->store($request->all());
        // dd($data);
        return redirect('pages');
    }
    public function edit($id)
    {
        $page = $this->PageRepository->get($id);

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = 'Edit ' . Str::singular($module[0]);

        
        return view('admin.pages.edit', compact('page', 'module_name'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_en' => 'required|string',
            'name_ar'=>'required|string',
            
        ]);
// dd($request);
        $this->PageRepository->update($id, $request->all());

        return redirect('pages');

    }
    public function destroy($id)
    {
        $this->PageRepository->delete($id);
        return redirect('pages');
    }
}
