<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    //
    use SoftDeletes;
    protected $table='images';

    protected $fillable = ['arpage_id','enpage_id','path','album_id'];



     /*
     * each image belongs to one arabic page
     */
    public function arpage(){
        return $this->belongsTo('App\Front\Arpage','arpage_id','id');
    }

    /*
 * each image belongs to one english page
 */
    public function enpage(){
        return $this->belongsTo('App\Front\Enpage','enpage_id','id');
    }


    /*
    * each image belongs to one album
    */
    public function album(){
        return $this->belongsTo('App\Front\Album','album_id','id');
    }
}
