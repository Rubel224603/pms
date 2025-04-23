<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('website.home.index',['blogs'=>Blog::latest()->get()]);
    }
    public function details($id){
        return view('website.home.details',['blog'=>Blog::find($id)]);
    }
}
