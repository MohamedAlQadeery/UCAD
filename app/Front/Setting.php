<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    //
    use SoftDeletes;
    protected $table='settings';

    protected $fillable = ['phone_number1','phone_number2','email',
        'location','facebook','twitter','instagram','mobile_number','fax','default_lang'

    ];
}
