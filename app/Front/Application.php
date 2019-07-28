<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //

//type
//0 طالب داخل الجامعه 1 طالب خارج الجامعه 2 خريج 3 موظف 4 عاطل عن العمل

    protected $primaryKey='id';
    protected  $fillable = ['subject','location','name','age','location','type','college','student_number','phone','mobile','email','know_about'];


    /**
     * each application belongs to one subject
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function subject(){
        return $this->belongsTo('App\Front\Subject','subject_id','id');
    }

    /**
     * each application belongs to one knowAbout
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function knowAbout(){
        return $this->belongsTo('App\Front\Knowabout','knowabout_id','id');
    }
}
