<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Post_logs extends Model
{
    public static $post;

    public static function addNewPostLog($id,$action){
       // dd($id);
        self::$post             = new Post_logs();

        self::$post->post_id    = $id;
        self::$post->action     = $action;

        //dd(self::$post);

        return self::$post->save();
    }

}
