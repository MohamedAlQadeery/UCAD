<?php

namespace App\Http\Controllers\BackEnd;

use App\Front\Arpage;
use App\Front\Enpage;
use App\Front\Item;
use App\Front\Subitem;
use App\Http\Requests\BackEnd\Items\StoreRequest;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class BaseItemController extends Controller
{
    //

    /**
     * for example menu (parent) item (sub)
     * @var
     */
    protected $parentModel;
    protected $subModel;


    public function __construct(Model $parentModel = null, Model $subModel = null)
    {
        $this->parentModel = $parentModel;
        $this->subModel = $subModel;
    }


    public function store(StoreRequest $request, $parentId)
    {
        $parent = $this->parentModel->findOrFail($parentId);
        $parent->getChildren()->create($request->all());
        alert()->success('The Item Has Been Created Successfully', 'Success');
        return redirect()->route($this->getPluralModelName() . '.index', $parent->id);
    }


    public function index($id)
    {

        $parent = $this->parentModel->findOrFail($id);
        $children = $parent->getChildren();
        $pluralSubModelName = $this->getPluralModelName();
        $rows = $children->paginate(10);
        $modelName = $this->getSingleModelName();
        $modelPluralName = $this->getPluralModelName();
        $modelDesc = $parent->en_name . ' ' . $pluralSubModelName . ' Control Page';


        return view('back-end.' . $pluralSubModelName . '.index', compact(['rows', 'modelName', 'modelPluralName', 'modelDesc']));


    }

    public function create($parentId)
    {
        $parent = $this->parentModel->findOrFail($parentId);

        $singleSubModelName = $this->getSingleModelName();
        $pluralSubModelName = $this->getPluralModelName();
        $append = $this->append();


        return view('back-end.' . $pluralSubModelName . '.create', [
            'modelSingleName' => $singleSubModelName,
            'modelPluralName' => $pluralSubModelName,
            'modelPageDesc' => 'Add ' . $singleSubModelName . ' To ' . $this->getSingleParentModelName(),
            'parent' => $parent

        ])->with($append);

    }

    public function edit($parentId, $subId)
    {

        $parent = $this->parentModel->findOrFail($parentId);
        $sub = $this->subModel->findOrFail($subId);


        $singleSubModelName = $this->getSingleModelName();
        $pluralSubModelName = $this->getPluralModelName();
        $append = $this->append();

        return view('back-end.' . $pluralSubModelName . '.edit', [
            'row' => $sub,
            'modelSingleName' => $singleSubModelName,
            'modelPluralName' => $pluralSubModelName,
            'modelPageDesc' => $singleSubModelName . ' edit page',
            'parent' => $parent

        ])->with($append);

    }

    public function destroy($parentId, $subId)
    {

        $parent = $this->parentModel->findOrFail($parentId);
        $sub = $this->subModel->findOrFail($subId);

        $parent->getChildren()->where('id', $subId)->delete();
        alert()->success('The Item Has Been Deleted Successfully', 'Success');
        return redirect()->route($this->getPluralModelName() . '.index', $parent->id);
    }


    public function update(StoreRequest $request, $parentId, $subId)
    {


        $parent = $this->parentModel->findOrFail($parentId);
        $sub = $this->subModel->findOrFail($subId);

        $parent->getChildren()->where('id', $subId)->update($request->except(['_token', '_method']));
        alert()->success('The' . $this->getSingleModelName() . ' Has Been Updated Successfully', 'Success');

        return redirect()->route($this->getPluralModelName() . '.index', $parent->id);

    }


    /**
     * this function used for eager loading
     * @return array
     */
    protected function with()
    {
        return [];
    }


    /**
     * use this function to append any model
     * @return array
     */
    protected function append()
    {
        return [];
    }


    public function getPluralModelName()
    {

        return str_plural(strtolower($this->getSingleModelName()));
    }


    /**
     * return single model Name
     * @return string
     */
    public function getSingleModelName()
    {
        return class_basename($this->subModel);
    }

    /**
     * this function used for eager loading
     * @return array
     */


    public function getPluralParentModelName()
    {

        return str_plural(strtolower($this->getSingleParentModelName()));
    }


    /**
     * return single model Name
     * @return string
     */
    public function getSingleParentModelName()
    {
        return class_basename($this->parentModel);
    }


    public function unselectedArPages()
    {

        $commonItems = Collection::make();

        $unselectedItems = DB::table("arpages")->select('*')
            ->whereNotIn('id', function ($query) {
                $query->select('arpage_id')->from('items');
            })
            ->get();


        $unselectedSubItems = DB::table("arpages")->select('*')
            ->whereNotIn('id', function ($query) {
                $query->select('arpage_id')->from('subitems');
            })
            ->get();


        foreach ($unselectedItems as $item) {
            if ($unselectedSubItems->contains($item)) {
                $commonItems->add($item);
            }
        }

        return $commonItems;


    }

    public function unselectedEnPages()
    {

        $commonItems = Collection::make();

        $unselectedItems = DB::table("enpages")->select('*')
            ->whereNotIn('id', function ($query) {
                $query->select('enpage_id')->from('items');
            })
            ->get();


        $unselectedSubItems = DB::table("enpages")->select('*')
            ->whereNotIn('id', function ($query) {
                $query->select('enpage_id')->from('subitems');
            })
            ->get();


        foreach ($unselectedItems as $item) {
            if ($unselectedSubItems->contains($item)) {
                $commonItems->add($item);
            }
        }

        return $commonItems;


    }



}
