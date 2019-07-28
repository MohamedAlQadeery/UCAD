<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class Subitem extends Model
{

    protected $table = 'subitems';

    protected $fillable = ['ar_name','en_name','item_id','arpage_id','enpage_id','active'];

    public function item(){
        return $this->belongsTo('App\Front\Item','item_id','id');
    }


    public function arPage(){
        return $this->hasOne('App\Front\Arpage','id','arpage_id');
    }

    /*
     * each item could have many english pages
     */
    public function enPage(){
        return $this->hasOne('App\Front\Enpage','id','enpage_id');
    }

    public function getParent(){
        return $this->item;
    }
}
