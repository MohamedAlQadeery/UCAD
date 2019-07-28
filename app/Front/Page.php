<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //

    protected $table='pages';
    protected $primaryKey = 'id';


    //1 اخبار 2 اعلانات
    protected $fillable = ['name','content','keywords','meta_desc','type','lang']; // type 0 مقال


    /*
     * each arabic page belongs to one item
     */
    public function item(){
        return $this->belongsTo('App\Front\Item','page_id','id');
    }


    /*
     * each arabic page belongs to one sub item
     */

    public function subItem(){
        return $this->belongsTo('App\Front\Subitem','page_id','id');
    }


    /*
     * each arabic page has many images
     */
    public function images(){
        return $this->hasMany('App\Front\Image','page_id','id');
    }


    /*
     * each arabic page could have one slider
     */
    public function slider(){
        return $this->hasOne('App\Front\Slider','page_id','id');
    }


}
