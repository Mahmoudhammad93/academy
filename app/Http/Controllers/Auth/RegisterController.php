<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Grade;
use App\Models\School;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => 'required',
            'school_name' => 'required',
            'phone' => 'required',
            'grades' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        $data['password'] = Hash::make($data['password']);
        $data['image'] = 'default.png';

        $user = User::create($data);
        $user->grades()->attach($data['grades'],['context_type' => 'grade']);
        $user->grades()->attach($data['levels'],['context_type' => 'level']);
        return $user;

    }

    public function get_reg_data(){
        $grades = Grade::where('parent_id',0)->get();
        $levels = Grade::where('parent_id','!=',0)->get();
        $countries = Country::all();

        return ['grades'=>$grades,'levels'=>$levels, 'countries'=>$countries];
    }

    public function getStudentSchools(Request $request){
        $value = $request['value'];
        $school = School::where('name', 'LIKE', "%{$value}%")
        ->orWhere('name_ar', 'LIKE', "%{$value}%")
        ->get();

        return $school;
    }


}
