<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    //
    protected $table='items';

    protected $fillable = ['ar_name','en_name','menu_id','arpage_id','enpage_id','active'];


    /*
     * each item belongs to one menu
     *
     */
    public function menu(){
        return $this->belongsTo('App\Front\Menu','menu_id','id');
    }

    /*
     * each item could have many arabic pages
     */
    public function arPage(){
        return $this->hasOne('App\Front\Arpage','id','arpage_id');

    }

    /*
     * each item could have many english pages
     */
    public function enPage(){
        return $this->hasOne('App\Front\Enpage','id','enpage_id');
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
