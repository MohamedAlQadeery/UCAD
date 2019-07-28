<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class Subitem extends Model
{

    protected $table = 'subitems';

    protected $fillable = ['name','item_id','page_id','active'];

    public function item(){
        return $this->belongsTo('App\Front\Item','item_id','id');
    }


    public function page(){
        return $this->hasOne('App\Front\Page','id','page_id');

    }

    public function getParent(){
        return $this->item;
    }
}
