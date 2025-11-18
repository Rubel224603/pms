<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    //
    public function index(){

        $user =Auth::user();
        //return $user;
        return view('admin.user.update',compact('user'));
    }
    public function basicUpdate(Request $request){
       // return $request;
        $user                     = Auth::user();
        $user->name               = $request->name;
        $user->email              = $request->email;
        //$user->profile_photo_path = $request->image;
        //$user->profile_photo_url = $request->profile_photo_url;

        if($request->file('image')){
           $image = $request->file('image');
           $imageName = time().'-'.$request->image->getClientOriginalExtension();

           $directory = 'backend/upload/user/';
           $image->move($directory,$imageName);
           $user->profile_photo_path = $imageName;
           $user->profile_photo_url = url($directory.$user->profile_photo_path);
           return     $user->profile_photo_url ;


        }
        $user->mobile             = $request->mobile;
        $user->save();
        return back()->with('message'," Basic info Updated");


    }

}
