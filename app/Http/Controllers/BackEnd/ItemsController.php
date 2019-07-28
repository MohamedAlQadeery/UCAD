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





    public function update(StoreRequest $request, $parentId, $subId)
    {
        $parent = $this->parentModel->findOrFail($parentId);
        $sub = $this->subModel->findOrFail($subId);


        $parent->getChildren()->where('id', $subId)->update($request->except(['_token', '_method']));
        alert()->success('The' . $this->getSingleModelName() . ' Has Been Updated Successfully', 'Success');

        return redirect()->route($this->getPluralModelName() . '.index', $parent->id);
    }

    protected function append()
    {

        return [

            'arPages' => $this->unselectedArPages(),
            'enPages' => $this->unselectedEnPages(),


        ];
    }





}
