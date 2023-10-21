<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(){
        return view('frontend.home.home');
    }

    public function categoryBlogs(){
        return view('frontend.blogs.category-blogs');
    }

    public function blogDetails(){
        return view('frontend.blogs.details');
    }
}
