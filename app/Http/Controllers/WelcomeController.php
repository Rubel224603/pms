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

        return view('frontend.home.index',['blogs'=>Blog::latest()->paginate(9)]);
    }
    public function details($id){
        return view('frontend.home.details',['blog'=>Blog::find($id)]);
    }



    protected $myService;
    public function __construct(MyService  $app)
    {
        $this->myService = $app;
    }

    public function myService()
    {
        $sum = $this->myService->sumCalculate(10, 5);
        return view('frontend.demo.index', compact('sum'));
    }

    public function userLogin()
    {
        return view('frontend.user-login');
    }
    public function userRegistration()
    {
        return view('frontend.user-registration');
    }





}
