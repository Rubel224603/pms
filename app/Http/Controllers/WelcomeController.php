<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        return view('website.home.index',['blogs'=>Blog::latest()->get()]);
    }
    public function details($id){
        return view('website.home.details',['blog'=>Blog::find($id)]);
    }

    public function test(){
        try {
            DB::beginTransaction();

            $a = 10;
            $b = 0;
            echo $a + $b;

            DB::commit();

            return "Success!";

        } catch (\Exception $e) {
            DB::rollBack();
            return "Error: " . $e->getMessage();
        }

    }



}
