<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //


    protected $table = 'menus';

    protected $fillable = ['ar_name','en_name','lang_flag','active'];


    public function items(){
        return $this->hasMany('App\Front\Item','menu_id','id');
    }

//
//    public function addItem($ar_name,$en_name,$active){
//        $this->items()->create(['ar_name'=>$ar_name,'en_name'=>$en_name,'active'=>$active]);
//    }


public function getChildren(){
      return $this->items();
}

}
