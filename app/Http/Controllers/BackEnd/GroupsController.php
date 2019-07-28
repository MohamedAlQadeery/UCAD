<?php

namespace App\Http\Controllers\BackEnd;


use App\Front\Group;

class GroupsController extends BackEndController
{



    public function __construct(Group $model)
    {
        parent::__construct($model);
    }

    public function store(){
        dd(request()->all());
    }
}
