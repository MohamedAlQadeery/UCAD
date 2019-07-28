<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');


Route::get('lang/{lang}', function ($lang) {

    session()->has('lang') ? session()->forget('lang') :'';
    $lang == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
    return back();
  
  })->name('front.lang');

route::get('/','HomeController@index')->name('home');
route::resource('admins','AdminsController');
route::resource('menus','MenusController');
  route::resource('menus/{menu}/items','ItemsController');
  route::resource('items/{item}/subitems','SubItemsController')->except(['show']);
  route::resource('arpages','ArPagesController');
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
