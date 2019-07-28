<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    //
    use SoftDeletes;
    protected $table='sliders';

    protected $fillable=['content','path','name','page_id','start_date','end_date'];


    /*
      * each item could have many arabic pages
      */
    public function page(){
        return $this->hasOne('App\Front\Page','id','page_id');

    }
}
