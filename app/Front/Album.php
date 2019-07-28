<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    //
    use SoftDeletes;
    protected $table = 'albums';

    protected $fillable = ['name','description'];


    /*
    * each Album has many images
    */
    public function images(){
        return $this->hasMany('App\Front\Image','album_id','id');
    }
}
