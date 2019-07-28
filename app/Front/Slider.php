<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    //
    use SoftDeletes;
    protected $table='sliders';

    protected $fillable=['content','path','name','arpage_id','enpage_id','start_date','end_date'];


    /*
     * each slider belongs to one arabic page
     */
    public function arPage(){
        return $this->belongsTo('App\Front\Arpage','arpage_id','id');

    }

    /*
 * each slider belongs to one english page
 */
    public function enPage(){
        return $this->belongsTo('App\Front\Enpage','enpage_id','id');

    }
}
