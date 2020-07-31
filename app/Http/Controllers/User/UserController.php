<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Profile;
use App\Mail\UserRegistration;
use Mail;

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

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' =>'1', 'status' =>'1' ])) {

            return redirect()->intended(route('account_home'));
        }

       if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' =>'2' ])) {

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
            'business_name' => 'required',
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return redirect('/user-registration')
                ->withErrors($validator)
                    ->withInput($request->all());
        }

        $link = strtoupper(str_random(30));

        $username = $request['username'];
        $email = $request['email'];
        $business_name = $request['business_name'];
        $fname = $request['fname'];
        $lname = $request['lname'];
        $phone = $request['phone'];
        $password = bcrypt($request['password']);

        // Save Record into User DB
        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->business_name = $business_name;
        $user->password = $password;
        $user->activated = $link;
        $user->role_id = 2;
        $user->status = 0;
        $user->save();

        // Save Record into Profile
            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->fname = $fname;
	        $profile->lname = $lname;
	        $profile->phone= '';
	        $profile->weblink= '';
	        $profile->fblink= '';
	        $profile->iglink= '';
	        $profile->twitlink= '';
	        $profile->country = '';
	        $profile->state = '';
	        $profile->city = '';
	        $profile->image = '';
	        $profile->save();

        Auth::login($user);
        $user = Auth::user();

        $user->activated = $link;

        Mail::to($user->email)->send(new UserRegistration($user));
        \Session::flash('Success_message','You Have Successfully Logged in please check your mail for your password');


        return redirect()->route('activate');
    }

     //update profile Function

    // public function updateuser (Request $request)
    // {
    //         $user = Auth::user();

    //         $this->validate($request, [
    //         'phone' => 'required',
    //         'weblink' => 'required',
    //         'fblink' => 'required',
    //         'iglink' => 'required',
    //         'twitlink' => 'required',
    //         ]);

    //         $phone = $request['phone'];
    //         $weblink = $request['weblink'];
    //         $fblink = $request['fblink'];
    //         $iglink = $request['iglink'];
    //         $twitlink = $request['twitlink'];


    //             profile::where(['user_id' => $user->id])
    //             ->update(array('phone' => $phone,
    //                            'weblink' => $weblink, 
    //                            'fblink' => $fblink,
    //                            'iglink' => $iglink,
    //                            'twitlink' => $twitlink
    //                         ));

    //             \Session::flash('Success_message','Account SUccessfully Updated');
    //             return redirect()->route('account_home');
    // }

    
    // Logout Function
    public function logout()
    {
        $user = Auth::user();

        Auth::logout();
        return redirect()->route('homepage');
    }

}

