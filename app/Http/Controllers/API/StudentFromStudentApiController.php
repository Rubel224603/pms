<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class StudentFromStudentApiController extends Controller
{
    public function getStudents()
    {
        $response = Http::get('http://127.0.0.1:8000/api/students');
        //dd($response->json());

       if($response->successful()){
           $students = $response->json();
            return view('website.students.index',['students'=>$students]);
           // return view('website.students.index',compact('students'));
        }
       return("failed to data fetch");
    }

    public function singleStudent($id)
    {
        $response = Http::get('http://127.0.0.1:8000/api/students/'.$id);
       // return $response;
        if($response->successful()){

            $student= $response->json();
            return view('website.students.singleStudent',['student'=>$student]);

        }
        return("failed to data fetch");
    }

    public function addForm(){
        return view('website.students.addStudent');
    }

    public function storeStudent(Request $request){
        //dd($request);
        $response           =  Http::post('http://127.0.0.1:8000/api/students-add',
            [
                'name'          => $request->name,
                'email'         => $request->email,
                'phone'         => $request->phone,
                'date_of_birth' => $request->date_of_birth,
            ]
        );



        if($response->successful()){
            return back()->with('message','Student Added Successfully done!!');

        }

        return back()->with('error','Student Added Filed');
    }
}
