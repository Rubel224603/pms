<?php

namespace App\Http\Controllers\Export;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BlogExport;

class ExportBlogController extends Controller
{
    //
    public function exportBlogData(){
        return Excel::download(new BlogExport(),'blogs.xlsx');
    }
}
