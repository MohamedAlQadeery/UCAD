<?php

namespace App\Http\Controllers\BackEnd;

use App\Front\Message;
use App\Http\Requests\BackEnd\Mail\StoreRequest;
use App\Mail\ReplayContact;
use Illuminate\Support\Facades\Mail;


class MessagesController extends BackEndController
{
    //
    public function __construct(Message $model)
    {
        parent::__construct($model);
    }



    public function index()
    {
        $rows = $this->model->orderBy('read','asc')->paginate(10);
        $modelName = $this->getSingleModelName();
        $modelPluralName = $this->getPluralModelName();
        $modelDesc = ucfirst($modelPluralName) . ' Control Page';
        $with = $this->with();

        if(!empty($with)){

            $rows =  $this->model->with($with)->paginate(10);

        }

        return view('back-end.' . $this->getPluralModelName() . '.index',
            [
                'rows' => $rows,
                'modelName' => $modelName,
                'modelPluralName' => $modelPluralName,
                'modelDesc' => $modelDesc

            ]);
    }

    /**
     * function that replay to contact us messages
     * @param StoreRequest $request
     * @param Message $contactMessage
     */
    public function replay(StoreRequest $request,$id){

        $contactMessage = $this->model->findOrFail($id);
//        Mail::send(new ReplayContact($contactMessage,$request->input('message')));
        Message::where(['id'=>$id])->update(['read'=>'1']);
        alert()->success('You Have Replied To The Message Successfully');
        return redirect()->route('admin.messages.index');
    }
}
