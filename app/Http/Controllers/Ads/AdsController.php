<?php

namespace App\Http\Controllers\Ads;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Ad;
use App\User;
use App\Category;
use App\State;
use App\City;
use App\Lga;
use App\Images;
use Storage;

class AdsController extends Controller
{
    //
    public function __construct()
    {
    $this->middleware('auth');
    }

    Public function post_ads()
    {
        $data['category'] = Category::all();
        $data['state'] = State::all();
        $data['lga'] = Lga::all();
        return view('User.post_ads',$data);
    }

    Public function my_ads()
    {
        $user = Auth::user();
    	$data['users'] = User::where('id',$user->id)->get();
        $data['ad'] = Ad::where('status',1)->where('user_id',$user->id)->get();
        $data['ads'] = Ad::where('status',0)->where('user_id',$user->id)->count();
    	$data['adds'] = Ad::where('status',1)->where('user_id',$user->id)->count();
        return view('User.my_ads',$data);
    }


     //Save Ads Function
    public function saveads(Request $request)
    {
    	$user = Auth::user();
         // Validation
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'price' => 'required',
            'state_id' => 'required',
            'description' => 'required',
        ]);

        $category_id = $request['category_id'];

        $title = $request['title'];

        $price = $request['price'];

        $state_id = $request['state_id'];

        $description = $request['description'];

        $image = $request['image'];       
        $filename = $image->getClientOriginalName();        
        $destination = 'upload/images';      
        $image->move($destination, $filename);

       
        // Save Record into Ad DB
        $ad = new Ad();
        $ad->user_id = $user->id;
        $ad->category_id = $category_id;
        $ad->title = $title;
        $ad->price = $price;
        $ad->description = $description;
        $ad->state_id = $state_id;
        $ad->slug = '';
        $ad->status = 1;
        $ad->save();

        // Save Record into image DB
        $images = new images();
        $images->ad_id = $ad->id;
        $images->source = $filename;
        $images->save();


        \Session::flash('Success_message','✔ Congratulations! Your ad will be available soon.');

        return redirect()->route('my_ads');
    }

     Public function viewad(Request $request, $id)
    {
         $data['ad'] = Ad::where('id',$id)->first();
        $data['category'] = Category::all();
        $data['state'] = State::all();
        return view('User.edit_post',$data);
    }

    // Update ad function
     public function updatead(Request $request, $id)
    {
            $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'price' => 'required',
            'state_id' => 'required',
            'description' => 'required',
            ]);

            $category_id = $request['category_id'];

            $title = $request['title'];

            $price = $request['price'];

            $state_id = $request['state_id'];

            $description = $request['description'];

            $images = Images::find($id);

            if  ($request->hasFile('image')) {
                // add the new photo 
                $image = $request['image'];       
                $filename = $image->getClientOriginalName();        
                $destination = 'upload/images';      
                $image->move($destination, $filename);
                $oldfilename =$images->source= $filename;
                // update the database
                $images->source = $filename;
                // delete the old photo
                Storage::delete($oldfilename);

            }

            $images->save();

            Ad::where(['id'=>$id])
                ->update(array(
                    'category_id' => $category_id,
                    'title' => $title,
                    'price' => $price, 
                    'state_id' => $state_id, 
                    'description' => $description
                    ));

                 
       
        \Session::flash('Success_message','✔ You have Successfully updated Ad');

         return back();
    }


    public function deleteads($id)
    {
    	// Delete Ads
        $ad = Ad::where('id',$id)->first();
        Storage::delete($image->source);
        $ad->delete();
        
        \Session::flash('flash_messagex','You Have Successfully Deleted an ad');

         return back();
    }

     Public function pending_ads()
    {
        $user = Auth::user();
    	$data['pendingad'] = Ad::where('status',0)->where('user_id',$user->id)->get();
    	$data['ads'] = Ad::where('status',0)->where('user_id',$user->id)->count();
    	$data['ad'] = Ad::where('status',1)->where('user_id',$user->id)->count();
        return view('User.pending_ads',$data);
    }

    public function deleteuser($id)
    {
        // Delete User
        $user = Auth::user();

           User::where(['id'=>$id])
                ->update(array('activated' => 0));
      
        
        \Session::flash('success_message','You Have Successfully Deleted Your account');

         return back();
    }
}


