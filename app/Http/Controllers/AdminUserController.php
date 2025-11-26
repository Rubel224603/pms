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
            if($user->profile_photo_path && file_exists('uploads/user/'.$user->profile_photo_path)){
                unlink('uploads/user/'.$user->profile_photo_path);
            }
           $image = $request->file('image');
           $imageName = time().'-.'.$request->image->getClientOriginalExtension();

           $directory = 'uploads/user/';
           $image->move($directory,$imageName);
           $user->profile_photo_path = $imageName;
           //return  "uploads/user/". $user->profile_photo_path;
           //$user->profile_photo_url = url($directory.$user->profile_photo_path);
           //return $user->profile_photo_url ;


        }
        $user->mobile  = $request->mobile;
        $user->save();
        return back()->with('message'," Basic info Updated");


    }
    public function userProfile(){
        $user = Auth::user();

        return view('admin.user.profile',compact('user'));
    }
    public function userProfileEdit(){
        $user =Auth::user();
        //return $user;
        return view('admin.user.edit-profile',compact('user'));
    }

}
