<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Profile;
use App\Ad;
use App\User;

class PageController extends Controller
{
    //
    //
    public function __construct()
    {
    $this->middleware('auth');
    }

    Public function account_home()
    {
        $user = Auth::user();
        $data['ads'] = Ad::where('status',0)->where('user_id',$user->id)->count();
        $data['ad'] = Ad::where('status',1)->where('user_id',$user->id)->count();
    	return view('User.account_home',$data);
    }
    
    Public function activate()
    {
        return view('User.activation');
    }
    
     Public function activatesuccess()
    {
        return view('User.activatesuccess');
    }

     public function activatesystemuser($id)
    {
            $user = Auth::user();

            User::where(['id'=>$id])
                ->update(array('status' => 1 ));

            \Session::flash('success_message','Activation Successfully');

         return redirect()->route('activatesuccess');
    }


    public function deactivatesystemuser($id)
    {
            $user = Auth::user();

            User::where(['id'=>$id])
                ->update(array('active' => 0));

        \Session::flash('success_message','Deactivation Successfully');

         return back();
    }


    //update profile Function

    public function updateprofile (Request $request)
    {
            $user = Auth::user();

            $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'weblink' => 'required',
            'fblink' => 'required',
            'iglink' => 'required',
            'twitlink' => 'required',
            'image'  => 'required',
            
            ]);

            $fname = $request['fname'];
            $lname = $request['lname'];
            $phone = $request['phone'];
            $weblink = $request['weblink'];
            $fblink = $request['fblink']; 
            $iglink = $request['iglink'];
            $twitlink = $request['twitlink'];

            $image = $request['image'];       
            $filename = $image->getClientOriginalName();        
            $destination = 'file/';      
            $image->move($destination, $filename);;       

                Profile::where(['user_id' => $user->id])
                ->update(array('fname' => $fname,
                               'lname' => $lname, 
                               'phone' => $phone,
                               'weblink' => $weblink,
                               'fblink' => $fblink,
                               'iglink' => $iglink,
                               'twitlink' => $twitlink,
                               'image' => strtolower($filename)
                               ));

                \Session::flash('Success_message','You Have Successfully updated your profile');
                return redirect()->route('account_home');
    }

}
