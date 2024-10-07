<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function about(){

        return view('static_pages.about.index');
    }

    public function staticClasses(){

        return view('static_pages.banan_classes.index');
    }

    public function contact(){

        return view('static_pages.contact.index');
    }

    public function education(){

        return view('static_pages.education.index');
    }
    public function training(){

        return view('static_pages.training.index');
    }
}
