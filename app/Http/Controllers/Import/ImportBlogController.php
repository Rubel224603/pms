<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use App\Imports\BlogImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportBlogController extends Controller
{
    //

    public function importForm(){
        return view('admin.import.import-blog');
    }
    public function importBlogs(Request $request){
       // return $request;
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,csv,xls',

        ]);

        //$blogImportObj =  new BlogImport();
        //return auth()->user();// if needed user data...

        $userId = auth()->id();
        //return $userId;
        //new BlogImport(auth()->id());
        Excel::import(new BlogImport($userId),$request->file('excel_file'));
        return back()->with('message','Blog Data Imported Successfully');

    }
}
