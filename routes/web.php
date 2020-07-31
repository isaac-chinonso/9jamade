<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
   'uses' => 'PageController@index',
   'as' => 'homepage'
]);

Route::get('/about',[
   'uses' => 'PageController@about',
   'as' => 'about'
]);

Route::get('/contact',[
   'uses' => 'PageController@contact',
   'as' => 'contact'
]);

Route::get('/pricing',[
   'uses' => 'PageController@pricing',
   'as' => 'pricing'
]);

Route::get('/how-to-use',[
   'uses' => 'PageController@howtouse',
   'as' => 'howtouse'
]);

Route::get('/career',[
   'uses' => 'PageController@career',
   'as' => 'career'
]);


Route::get('/login',[
   'uses' => 'PageController@login',
   'as' => 'login'
]);

Route::post('/updateuser',[
   'uses' => 'User\UserController@updateuser',
   'as' => 'updateuser'
]);


Route::post('/login',[
   'uses' => 'User\UserController@login',
   'as' => 'login'
]);

Route::get('/register',[
   'uses' => 'PageController@register',
   'as' => 'register'
]);


Route::post('/register',[
   'uses' => 'User\UserController@saveuser',
   'as' => 'saveuser'
]);

Route::get('/logout',[
   'uses' => 'User\UserController@logout',
   'as' => 'logout'
]);


Route::get('/deleteuser/{id}', [
		'uses' => 'Ads\AdsController@deleteuser',
		'as' => 'deleteuser'
]);

Route::get('/detail/{id}/{slug?}', [ 
         'uses' => 'PageController@view_ads',
         'as' => 'viewads'
])->where('slug', '[\w\d\-\_]+');

Route::get('/detail-s/{id}/{slug?}', [
         'uses' => 'PageController@details',
         'middleware' => ['auth'],
         'as' => 'detail'
])->where('slug', '[\w\d\-\_]+');

Route::get('/rating-review/{id}',[
      'uses' => 'PageController@review',
      'middleware' => ['auth'],
      'as' => 'review'
]);


Route::post('/post-review/{id}',[
      'uses' => 'PageController@postreview',
      'as' => 'postreview'
]);


//=======USER=======//

Route::group([ 'middleware' => 'web', 'prefix' => 'user', 'before' => 'user' ], function(){

   Route::get('/dashboard',[
      'uses' => 'frontend\PageController@account_home',
      'as' => 'account_home'
   ]);
   
    Route::get('/activate account',[
      'uses' => 'frontend\PageController@activate',
      'as' => 'activate'
   ]);
   
   Route::get('/activation-successful',[
      'uses' => 'frontend\PageController@activatesuccess',
      'as' => 'activatesuccess'
   ]);
   
   Route::get('/activatesystemuser/{id}', [
      'uses' => 'frontend\PageController@activatesystemuser',
      'as' => 'activatesystemuser'
   ]);

   Route::get('/deactivatesystemuser/{id}', [
      'uses' => 'frontend\PageController@deactivatesystemuser',
      'as' => 'deactivatesystemuser'
   ]);

   Route::get('/post-ads',[
      'uses' => 'Ads\AdsController@post_ads',
      'middleware' => ['auth'],
      'as' => 'post_ads'
   ]);

   Route::post('/saveads',[
      'uses' => 'Ads\AdsController@saveads',
      'as' => 'saveads'
   ]);

   Route::get('/my-ads',[
      'uses' => 'Ads\AdsController@my_ads',
      'as' => 'my_ads'
   ]);

   Route::get('/update-post/{id}', [
         'uses' => 'Ads\AdsController@viewad',
         'as' => 'viewpost'
   ]);

   Route::post('/update-ads/{id}', [
         'uses' => 'Ads\AdsController@updatead',
         'as' => 'updatead'
   ]);

   Route::get('/delete-ads/{id}', [
         'uses' => 'Ads\AdsController@deleteads',
         'as' => 'deleteads'
   ]);

   Route::get('/pending-ads', [
      'uses' => 'Ads\AdsController@pending_ads',
      'as' => 'pending_ads'
   ]);


   Route::post('/profile', [
       'uses' => 'frontend\PageController@updateprofile',
      'as' => 'updateprofile'
   ]);
   
   Route::get('/logout',[
      'uses' => 'User\UserController@logout',
      'as' => 'user_logout'
   ]);



});


//=======ADMIN=======//

Route::group([ 'middleware' => 'web', 'prefix' => 'admin', 'before' => 'admin' ], function(){

   Route::get('/Admin_login',[
      'uses' => 'PageController@Admin_login',
      'as' => 'Admin_login'
   ]);

   Route::get('/deleteuser/{id}', [
		'uses' => 'Admin\AdminController@deleteadminuser',
		'as' => 'deleteadminuser'
   ]);

   Route::get('/logout',[
   'uses' => 'User\UserController@logout',
   'as' => 'logout'
   ]);

   Route::get('/dashboard',[
      'uses' => 'Admin\AdminController@dashboard',
      'as' => 'dashboard'
   ]);

   Route::get('/category', [
      'uses' => 'Admin\AdminController@category',
      'as' => 'admincategory'
   ]);

   Route::post('/category', [
      'uses' => 'Admin\AdminController@savecategory',
      'as' => 'adminsavecategory'
   ]);

   Route::get('/Admin_user', [
      'uses' => 'Admin\AdminController@Admin_user',
      'as' => 'Admin_user'
   ]);

    Route::get('/Ads', [
      'uses' => 'Admin\AdminController@Ads',
      'as' => 'Ads'
   ]);
   
   Route::get('/pending-ads', [
      'uses' => 'Admin\AdminController@pending_ads',
      'as' => 'Admin_pending_ads'
   ]);

});

