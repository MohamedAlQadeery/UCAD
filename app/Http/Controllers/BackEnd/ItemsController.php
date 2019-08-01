<?php

namespace App\Http\Controllers\BackEnd;


use App\Front\Arpage;
use App\Front\Enpage;
use App\Front\Item;
use App\Front\Menu;
use App\Http\Controllers\Controller;
use App\Http\Requests\BackEnd\Items\StoreRequest;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;


class ItemsController extends BaseItemController
{
    //
    public function __construct(Menu $menu, Item $item)
    {
        parent::__construct($menu, $item);
    }













}
