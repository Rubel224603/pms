<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard.index', [
            'totalBlog'=>Blog::count(),
            "totalUser"=>User::count(),
            'users'=>User::all()
        ]);
    }
}

