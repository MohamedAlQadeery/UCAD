<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Knowabout extends Model
{
    //
    use SoftDeletes;

    protected $table = 'knowabouts';
    protected $fillable = ['name'];


    /**
     * each know about has many applications
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applications(){
        return $this->hasMany('App\Front\Knowabout','knowabout_id','id');
    }
}
