<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use App\Providers\MyServiceProvider;

use App\Http\Services\MyService;

class WelcomeController extends Controller
{
    public function index(){
//        session(['myname'=>"Rubel Hosen"]);
//        dd(session()->all());

        return view('website.home.index',['blogs'=>Blog::latest()->paginate(9)]);
    }
    public function details($id){
        return view('website.home.details',['blog'=>Blog::find($id)]);
    }



    protected $myService;
    public function __construct(MyService  $app)
    {
        $this->myService = $app;
    }

    public function myService()
    {
        $sum = $this->myService->sumCalculate(10, 5);
        return view('website.demo.index', compact('sum'));
    }





}
