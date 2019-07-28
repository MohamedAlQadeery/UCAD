<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    //
    use SoftDeletes;
    protected $table = 'subjects';
    protected $fillable = ['name'];


    /**
     * each subject has many applications
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

}
