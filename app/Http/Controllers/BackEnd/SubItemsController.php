<?php

namespace App\Http\Controllers\BackEnd;


use App\Front\Arpage;
use App\Front\Enpage;
use App\Front\Item;
use App\Front\Menu;
use App\Front\Subitem;
use App\Http\Requests\BackEnd\Items\StoreRequest;
use Illuminate\Support\Facades\DB;


class SubItemsController extends BaseItemController
{
    //

    public function __construct(Item $item, Subitem $subitem)
    {
        parent::__construct($item, $subitem);
    }

    protected function append()
    {


        $arabicPages = DB::table("arpages")->select('*')
            ->whereNotIn('id', function ($query) {
                $query->select('arpage_id')->from('subitems');
            })
            ->get();


        $englishPages =  DB::table("enpages")->select('*')
            ->whereNotIn('id', function ($query) {
                $query->select('enpage_id')->from('subitems');
            })
            ->get();

        return [
            'arPages' => $arabicPages,
            'enPages' => $englishPages
        ];
    }
}
