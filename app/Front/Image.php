<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    //
    use SoftDeletes;
    protected $table='images';

    protected $fillable = ['page_id','path','album_id'];




    /*
 * each image belongs to one english page
 */
    public function page(){
        return $this->belongsTo('App\Front\Page','page_id','id');
    }


    /*
    * each image belongs to one album
    */
    public function album(){
        return $this->belongsTo('App\Front\Album','album_id','id');
    }
}
