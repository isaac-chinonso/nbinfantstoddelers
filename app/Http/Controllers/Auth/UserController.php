<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Profile;

class UserController extends Controller
{
     // Login Function
     public function login(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                    ->withInput($request->all());
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' =>'1'])) {

            return redirect()->intended(route('account'));
        }

       if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' =>'2', 'activated' =>'1' ])) {

            return redirect()->intended(route('dashboard'));
         }


        \Session::flash('warning_message','These credentials do not match our records.');
        return redirect()->back();
    }


    //Save Users Function
    public function saveuser(Request $request)
    {
         // Validation
        $validator = Validator::make($request->all(),[
            'username' => 'required|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password',
        ]);

        $username = $request['username'];
        $email = $request['email'];
        $password = bcrypt($request['password']);

        // Save Record into User DB
        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->password = $password;
        $user->role_id = 1;
        $user->save();


        // Save Record into Profile
            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->fname = '';
	        $profile->lname = '';
	        $profile->phone= '';
	        $profile->country= '';
	        $profile->state= '';
	        $profile->city= '';
	        $profile->save();
         

        Auth::login($user);

        $user = Auth::user();

        \Session::flash('Success_message','You Have Successfully Logged in please check your mail for your password');


        return redirect()->route('account');
    }

    
    // Logout Function
    public function logout()
    {
        $user = Auth::user();

        Auth::logout();
        return redirect()->route('homepage');
    }
}
