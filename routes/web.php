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

Route::get('/pass', function () {
    dd(bcrypt('12345'));
});

Route::get('lang/{lang}', function ($lang) {

  session()->has('lang') ? session()->forget('lang') :'';
  $lang == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
  return back();

})->name('lang');


//Front end routes
Route::namespace('FrontEnd')->prefix('')->group(function () {
  Route::get('/', ['as' => 'home', 'uses' => 'HomepageController@index']);
  Route::get('/home', ['as' => 'home', 'uses' => 'HomepageController@index']);
  Route::get('/home/{id?}', ['as' => 'front.home', 'uses' => 'HomepageController@home']);


  Route::get('/subjects/{id?}', ['as' => 'front.subjects', 'uses' => 'HomepageController@subject']);
  Route::get('/registration/{id?}', ['as' => 'front.registrations', 'uses' => 'HomepageController@home']);
  Route::get('/teachers', ['as' => 'front.teachers', 'uses' => 'HomepageController@teachers']);
  Route::get('/facilities/{id?}', ['as' => 'front.facilities', 'uses' => 'HomepageController@contact']);
  Route::get('/services/{id?}', ['as' => 'front.services', 'uses' => 'HomepageController@home']);
  Route::get('/contacts', ['as' => 'front.contacts', 'uses' => 'HomepageController@contact']);
  Route::get('/map',['as'=>'front.map','uses'=>'HomepageController@map']);


  Route::get('/application', ['as' => 'front.application', 'uses' => 'HomepageController@application']);
  Route::post('/application', ['as' => 'front.store.application', 'uses' => 'HomepageController@storeApplication']);
  Route::get('/advertisings', ['as' => 'front.advertisings', 'uses' => 'HomepageController@advertisings']);
  Route::get('/advertisings/{id?}', ['as' => 'front.advertising', 'uses' => 'HomepageController@advertising']);
  Route::get('/news', ['as' => 'front.news', 'uses' => 'HomepageController@news']);
  Route::get('/news/{id?}', ['as' => 'front.single.news', 'uses' => 'HomepageController@singleNews']);


  Route::get('/subjects/{id?}', ['as' => 'front.subjects', 'uses' => 'HomepageController@subject']);
  Route::get('/service/{id?}', ['as' => 'front.service', 'uses' => 'HomepageController@service']);
  Route::get('/teachers/{id?}', ['as' => 'front.profile', 'uses' => 'HomepageController@profile']);


});




//back end routes
/*Route::group(['prefix'=>'admin' , "middleware"=>"auth" , 'namespace'=>'BackEnd'],function (){

  route::get('/','HomeController@index')->name('admin.home');
  route::resource('admins','AdminsController');
  route::resource('menus','MenusController');
  route::resource('menus/{menu}/items','ItemsController');
  route::resource('items/{item}/subitems','SubItemsController')->except(['show']);
  route::resource('pages','ArPagesController');
  route::resource('enpages','EnPagesController');
  route::resource('messages','MessagesController')->only(['index','edit','destroy']);
  route::post('messages/{id}','MessagesController@replay')->name('messages.replay');
  route::resource('applications','ApplicationsController')->only(['index','edit','destroy']);
  route::post('applications/{id}','ApplicationsController@replay')->name('applications.replay');
  route::resource('settings','SettingsController')->only(['edit','update']);
  route::get("create",['as'=>"registerForm" , "uses"=>'AdminsController@showRegistrationForm']);
  route::post("create",['as'=>"registerFormAction" , "uses"=>'AdminsController@store']);
  route::view("albam" ,"back-end.albam.albam" );
  route::post("create",['as'=>"registerFormAction" , "uses"=>'AdminsController@store']);
  route::resource('groups','GroupsController');



  Route::get('lang/{lang}', function ($lang) {
      session()->has('lang') ? session()->forget('lang') :'';
      $lang == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
      return back();
  })->name('lang');


  Route::get("logout/logout" , function (){
      if(auth()->check()){
          auth()->logout();
          return redirect("admin/login");
      }else{
          return redirect("admin/login");
      }
  })->name("Adminlogout");



  Route::get('logout', function () {
          return redirect()->route("Adminlogout");
  });

});*/


Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});


Route::get('/test',function(){
    return view('test');
});


