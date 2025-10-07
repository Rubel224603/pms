<?php

namespace App\Exports;

use App\Models\Blog;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BlogExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        // Make sure columns order matches headings
        return Blog::select(
            'id',
            'title',
            'content',
            'thumb_image',
            'user_id',
            'created_at',
            'updated_at'
        )->get();
    }


    public function headings(): array
    {
        return [
            'Id',
            'Title',
            'Content',
            'Thumb Image',
            'User ID',
            'Created At',
            'Updated At',
        ];
    }
}
