<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Arpage extends Model
{
    //
    use SoftDeletes;

    protected $table='arpages';
    protected $primaryKey = 'id';


    //1 اخبار 2 اعلانات
    protected $fillable = ['name','content','keywords','meta_desc','type']; // type 0 مقال


    /*
     * each arabic page belongs to one item
     */
    public function item(){
        return $this->belongsTo('App\Front\Item','arpage_id','id');
    }


    /*
     * each arabic page belongs to one sub item
     */

    public function subItem(){
        return $this->belongsTo('App\Front\Subitem','arpage_id','id');
    }


    /*
     * each arabic page has many images
     */
    public function images(){
        return $this->hasMany('App\Front\Image','arpage_id','id');
    }


    /*
     * each arabic page could have one slider
     */
    public function slider(){
        return $this->hasOne('App\Front\Slider','arpage_id','id');
    }



}
