<?php

namespace App\Http\Controllers\BackEnd;

use App\Front\Slider;
use Illuminate\Http\Request;

class SlidersController extends BackEndController
{
        public function __construct(Slider $model)
        {
            parent::__construct($model);
        }



     public function create(){
        return view('food.create');
    }

   // send request and compact it for index page
    public function index(){
        return view('food.index');
    }

    // send the id and the data from database by compact
     public function edit(){
        return view('food.update');

    }


   public  function store(Request $request){

        $request->validate($this->rules(),$this->massages());
        $uploadedImage=$request->file('image');
        $imageName=time().'.'.$uploadedImage->getClientOriginalExtension();
        $dirction=public_path('/image/');
        $uploadedImage->move($dirction,$imageName);
        $imagePath='image/'.$imageName;

        $book=new Slider();
        $book->image =$imagePath;
        $book->name=$request->input('name');
        $book->ISPN=$request->input('ISPN');
        $book->save();



    }

    private function rules(){
        return [
            'image' => 'required|mimes:png,jpeg',
            'name' => 'required|min:3',
            'details' => 'required|min:20'
        ];
    }

    private function massages(){

        return [
            'image.required' => 'image is required',
            'image.mimes' => 'invalid image',
            'name.required' => 'food name is required',
            'name.min' => 'length is  too short',
            'details.required' => 'details name is required',
            'details.min' => 'details is  too short'
        ];
    }





}
