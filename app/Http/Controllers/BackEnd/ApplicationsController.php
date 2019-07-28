<?php

namespace App\Http\Controllers\BackEnd;

use App\Front\Application;
use App\Front\Knowabout;
use App\Front\Subject;
use App\Http\Requests\BackEnd\Applications\StoreRequest;
use App\Mail\ApplicationReplay;

use Illuminate\Support\Facades\Mail;

class ApplicationsController extends BackEndController
{
    //
    public function __construct(Application $model)
    {
        parent::__construct($model);
    }


    public function index()
    {
        $rows = $this->model->orderBy('status', 'desc')->paginate(10);
        $modelName = $this->getSingleModelName();
        $modelPluralName = $this->getPluralModelName();
        $modelDesc = ucfirst($modelPluralName) . ' Control Page';
        $with = $this->with();

        if (!empty($with)) {

            $rows = $this->model->with($with)->paginate(10);

        }

        return view('back-end.' . $this->getPluralModelName() . '.index',
            [
                'rows' => $rows,
                'modelName' => $modelName,
                'modelPluralName' => $modelPluralName,
                'modelDesc' => $modelDesc

            ]);
    }


    public function edit($id)
    {

        $row = $this->model->findOrFail($id);
        $modelSingleName = $this->getSingleModelName();
        $modelPageDesc = $modelSingleName . " Edit Page";
        $modelPluralName = $this->getPluralModelName();
        $append = $this->append();
        $studentType = '';
        if ($row->type == 0) {
            $studentType = "CAD Student";
        } else if ($row->type == 1) {
            $studentType = "from another college student";
        } else if ($row->type==2) {
            $studentType = "graduate student";
        } else if ($row->type==3) {
            $studentType = "Employee";
        }else{
            $studentType = "Unemployed";

        }

        return view('back-end.' . $modelPluralName . '.edit',
            [
                'modelSingleName' => $modelSingleName,
                'modelPluralName' => $modelPluralName,
                'modelPageDesc' => $modelPageDesc,
                'row' => $row,
                'studentType'=>$studentType
            ])->with($append);

    }


    /**
     * function that replay to Application us messages
     * @param StoreRequest $request
     * @param Message $contactMessage
     */
    public function replay(StoreRequest $request, $id)
    {

        $application = $this->model->findOrFail($id);
        Mail::send(new ApplicationReplay($application, $request->input('message')));
        Application::where(['id'=>$id])->update(['status' => $request->input('status')]);
        alert()->success('You Have Replied To The Message Successfully');
        return redirect()->route('admin.applications.index');
    }

    public function append()
    {
        return [
            'subjects' => Subject::all(),
            'knowabouts' => Knowabout::all()
        ];
    }

}
