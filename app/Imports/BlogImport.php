<?php

namespace App\Imports;

use App\Models\Blog;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithBatchInserts;


class BlogImport implements ToModel,withHeadingRow, WithChunkReading,WithValidation,WithBatchInserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    protected $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }


    public function model(array $row)
    {
      //  $request = request()->user->id;
        return new Blog([
            //
            'title'=>$row['title'] ,
            'content'=>$row['content'] ,
            'thumb_image'=>$row['thumb_image'] ,
            'user_id'=>$this->userId ,
        ]);
    }

    public function chunkSize(): int
    {
        // TODO: Implement chunkSize() method.
        return 2000;
    }
    public function rules(): array
    {
        // TODO: Implement rules() method.
        return  [''];
    }
    public function batchSize(): int
    {
        // TODO: Implement batchSize() method.
        return 2000;
    }
    public function headings()
    {
        // TODO: Implement headings() method.
    }

}
