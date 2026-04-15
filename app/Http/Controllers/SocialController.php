<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    //
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallBack(){
        try{
            $googleUser = Socialite::driver('google')->user();
            $user = User::updateOrCreate([
                'email' => $googleUser->email,
            ], [
                'name' => $googleUser->name,
                'google_id' => $googleUser->id,
                'profile_photo_path' => $googleUser->avatar,
            ]);

            Auth::login($user);
            return redirect()->intended('/dashboard');
        }catch(\Exception $e){
            return redirect('/login')->with('error', 'Something went wrong!');
        }
    }
}
