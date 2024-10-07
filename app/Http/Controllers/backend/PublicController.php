<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Str;

class PublicController extends Controller
{

    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function edit_profile($id)
    {
        $countries = ['Egypt', 'KSA'];
        $user = $this->userRepository->get($id);
        $module_name = 'Edit Profile';

        // dd($countries);
        if(auth()->user()->account_type == 'student')
            return view('public_views.student_profile', compact('user', 'module_name', 'countries'));
        else
            return view('public_views.edit_profile', compact('user', 'module_name', 'countries'));
    }
}
