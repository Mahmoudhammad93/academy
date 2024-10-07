<?php

namespace App\Http\Controllers\backend\admin;
use App\Http\Controllers\Controller;

use App\Repositories\Payment\PaymentRepositoryInterface;
use Illuminate\Http\Request;
use DataTables;
use Str;
class PaymentController extends Controller
{
    private $paymentRepository;

    public function __construct(PaymentRepositoryInterface $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }


    public function index(Request $request)
    {
        
        if ($request->ajax()) {
            $data = $this->paymentRepository->getAll();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '
                        <a href="payments/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '. __('data.Edit').'
                        </a> &nbsp;
                        <form id="delete-form" method="POST" action="payments/' . $row->id . '" style="display:inline-block">
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
        $module_name = 'payments';

        return view('admin.payments.index', compact('module_name'));
    }

    public function create()
    {
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = 'payments';

        return view('admin.payments.create', compact('module_name'));
    }
    public function store(Request $request)
    {
        /**new */
        $request->validate([
            'payment_name' => 'required|string',
            
        ]);

        $data=$this->paymentRepository->store($request->all());
        // dd($data);
        return redirect('payments');
    }
    public function edit($id)
    {
        $payment = $this->paymentRepository->get($id);

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = 'Edit ' . Str::singular($module[0]);

        return view('admin.payments.edit', compact('payment', 'module_name'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'payment_name' => 'required|string',
            
        ]);

        $this->paymentRepository->update($id, $request->all());

        return redirect('payments');

    }
    public function destroy($id)
    {
        $this->paymentRepository->delete($id);
        return redirect('payments');
    }
}
