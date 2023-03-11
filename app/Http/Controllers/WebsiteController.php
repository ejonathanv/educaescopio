<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(){
        return view('website.home');
    }

    public function about(){
        return view('website.about');
    }

    public function nursery(){
        return view('website.nursery');
    }

    public function preschool(){
        return view('website.preschool');
    }

    public function contact(){
        return view('website.contact');
    }

    public function parentsArea(){
        return view('website.parentsArea');
    }

    public function privacyPolicy(){
        return view('website.privacyPolicy');
    }

    public function programs(){
        return view('website.programs');
    }

    public function enrollments(){
        return view('website.enrollments');
    }
    
}
