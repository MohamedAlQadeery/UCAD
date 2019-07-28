<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enpage extends Model
{
    //
    use SoftDeletes;
    protected $table='enpages';
    protected $primaryKey = 'id';

    protected $fillable = ['name','content','keywords','meta_desc','type']; // type 0 مقال
    //1 اخبار 2 اعلانات

    /*
    * each english page belongs to one item
    */
    public function item(){
        return $this->belongsTo('App\Front\Item','enpage_id','id');
    }


    /*
     * each english page belongs to one sub item
     */

    public function subItem(){
        return $this->belongsTo('App\Front\Subitem','enpage_id','id');
    }


    /*
    * each english page has many images
    */
    public function images(){
        return $this->hasMany('App\Front\Image','enpage_id','id');
    }


    /*
   * each english page could have one slider
   */
    public function slider(){
        return $this->hasOne('App\Front\Slider','enpage_id','id');
    }

}

