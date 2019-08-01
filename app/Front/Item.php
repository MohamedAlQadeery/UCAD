<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    //
    protected $table='items';

    protected $fillable = ['name','menu_id','page_id','active'];


    /*
     * each item belongs to one menu
     *
     */
    public function menu(){
        return $this->belongsTo('App\Front\Menu','menu_id','id');
    }



    public function page(){
        return $this->hasOne('App\Front\Page','id','page_id');

    }




    public function subitems(){
        return $this->hasMany('App\Front\Subitem','item_id','id');

    }


    public function getChildren(){
        return $this->subitems();

    }

    public function getParent(){
        return $this->menu;
    }

}
