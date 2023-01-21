<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(){
        return view('website.pages.index');
    }
    public function contact(){
        return view('website.pages.contact');
    }
    public function about(){
        return view('website.pages.about');
    }
    public function layout(){
        return view('website.layout.full');
    }
}
