<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ad;
use App\Category;
use App\State;
use App\User;
use App\images;
use App\review;

class PageController extends Controller
{
    //
     Public function index()
    {
        $data['ad'] = Ad::where('status',1)->paginate(20);
        $data['category'] = Category::all();
        $data['state'] = State::all();
        $search = \Request::get('search'); //<-- we use global request to get the param of URI
 
        $data['ad'] = Ad::where('title','like','%'.$search.'%')
        ->orwhere('category_id','like','%'.$search.'%')->orwhere('state_id','like','%'.$search.'%')->orderBy('title')->paginate(20);
        return view('frontend.index',$data);
    }
    
   Public function view_ads(Request $request, $slug)
    {
        $data['addetails'] = Ad::where('slug',$slug)->first();
        $data['review'] = review::where('ad_id',$data['addetails']->id)->get();
        return view('frontend.ad_details',$data);
    }

    Public function details($slug)
    {
        $data['addetails'] = Ad::where('slug',$slug)->first();
        $data['review'] = review::where('ad_id',$data['addetails']->id)->get();
        return view('frontend.details',$data);
    }

    Public function review($slug)
    {
        $data['addetails'] = Ad::where('slug',$slug)->first();
        return view('frontend.review',$data);
    }

    //post review Function
    public function postreview(Request $request, $id)
    {
        
            $user = Auth::user();
             // Validation
            $this->validate($request, [
                'rate' => 'required',
                'comment' => 'required',
            ]);

            $rate = $request['rate'];

            $comment = $request['comment'];

            // Save Record into review DB
            $review = new review();
            $review->user_id = $user->id;
            $review->profile_id = $user->profile->first()->id;
            $review->ad_id = $id;
            $review->rate = $rate;
            $review->comment = $comment;
            $review->status = 1;
            $review->save();


            \Session::flash('Success_message','✔ Review posted');

            return redirect()->back();
    }


    Public function about()
    {
    	return view('frontend.about');
    }

     Public function contact()
    {
    	return view('frontend.contact');
    }

     Public function login()
    {
    	return view('frontend.login');
    }

     Public function register()
    {
    	return view('frontend.register');
    }

    Public function pricing()
    {
        return view('frontend.pricing');
    }

    Public function  howtouse()
    {
        return view('frontend.how_to_use');
    }

    Public function  career()
    {
        return view('frontend.career');
    }
}
