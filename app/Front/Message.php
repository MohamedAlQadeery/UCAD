<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
   
    protected $table = 'messages';
    protected $fillable = ['name','email','subject','body','read'];
}
