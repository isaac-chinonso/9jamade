<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Category;
use App\Ad;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    Public function dashboard()
    {
    	$user = Auth::user();
    	$data['allusers'] = User::where('status', '=', 1)->count();
    	$data['user'] = User::where('id',$user->id)->count();
    	$data['categories'] = Category::count();
    	$data['ad'] = Ad::where('status',1)->count();
    	$data['ads'] = Ad::where('status',0)->count();

        return view('Admin.dashboard',$data);
    }
 
    
     //Admin pending ad Page
     public function pending_ads()
    {
        $data['pendingad'] = Ad::where('status',0)->get();
        return view('Admin.pending_ads',$data);
    }


    //Admin Category Page
     public function category()
    {
        $user = Auth::user();
        $data['categories'] = Category::all();
        return view('Admin.category',$data);
    }

    // Save Category
     public function savecategory(Request $request)
    {
             // Validation
		        $this->validate($request, [
		            'title' => 'required',
		        ]);
		        $user = Auth::user();

		        $title = $request['title'];
		       
		        // Save Record into User DB
		        $category = new Category();
		        $category->title = $title;
		        $category->save();

        \Session::flash('Success_message','You Have Successfully Added a Category');

         return back();
    }

    //Admin User Page
     public function Admin_user()
    {
        $user = Auth::user();
        $data['user'] = User::where('role_id',1)->get();
        return view('Admin.Admin_user',$data);
    }

    public function deleteadminuser($id)
    {
        // Delete Ads
        $user = Auth::user();
        $user = User::where('id',$id)->first();
        $user->delete();
        
        \Session::flash('success_message','You Have Successfully Deleted User');

         return back();
    }


    //Admin User Page
     public function Ads()
    {
        $user = Auth::user();
        $data['ad'] = Ad::where('status',1)->get();
        return view('Admin.Ads',$data);
    }
    
}
