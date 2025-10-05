<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class ImportBlogController extends Controller
{
    //
    public function importBlogs(Request $request){
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,csv,xls',

        ]);
        //Excel::import()
    }
}
