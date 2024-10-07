<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Country\CountryRepositoryInterface;
use Illuminate\Http\Request;
use DataTables;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $countryRepository;

    public function __construct(CountryRepositoryInterface $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->countryRepository->getAll();
            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {

                    $btn = '
                        <a href="countries/' . $row->id . '/edit" class="edit btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i>
                            '.trans('data.Edit').'
                        </a> &nbsp;
                        <form id="delete-form" method="POST" action="countries/' . $row->id . '" style="display:inline-block">
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
                ->rawColumns(['action', 'grades'])
                ->make(true);
        }

        $module_name = "Countries";
        return view('admin.countries.index',compact('module_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $module_name = "Countries";

        return view('admin.countries.create',compact('module_name'));
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


        $this->countryRepository->store($request->all());
        return redirect('countries');
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
        $country = $this->countryRepository->get($id);

        $module_name = "Countries";

        return view('admin.countries.edit',compact('country','module_name'));
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

        $this->countryRepository->update($id,$request->all());
        return redirect('countries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->countryRepository->delete($id);
        return redirect('countries');
    }
}
