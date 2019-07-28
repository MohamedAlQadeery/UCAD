<?php

namespace App\Http\Controllers\FrontEnd;

use App\front\Application;
use App\Front\Arpage;
use App\Front\Enpage;

use App\Front\Slider;

use App\front\Subject;

use Illuminate\Support\Facades\Request;

class HomepageController extends FrontEndController
{
    public function index()
    {
//        $sliders = Slider::get();
        $subjects = Subject::get();
        return view('front-end.homePage.home', ['subjects' => $subjects]);
    }


    public function checkLang($id)
    {
        if (lang() == 'ar')
            $page = Arpage::findOrFail($id);
        elseif (lang() == 'en')
            $page = Enpage::findOrFail($id);
        return $page;
    }

//    public function page($id = 0)
//    {
//        $page = $this->checkLang($id);
//        return view('front-end.homePage.page', compact('page'));
//    }

    public function showPage($id, $type)
    {

        if ($type == 'ar') {
            $page = Arpage::where('id', $id)->first();
        }else{
            $page = Enpage::where('id', $id)->first();
        }

        dd($page);
        return view('front-end.homePage.page', compact('page'));
    }


    public function home($id = 0)
    {
        $page = $this->checkLang($id);
        return view('front-end.homePage.page', compact('page'));
    }

    public function subject($id = 0)
    {
        $subject = $this->checkLang($id);
        return view('front-end.subjects.subject', compact('subject'));
    }

    public function getPage($slug = null, $id = 0)
    {
        $page = $this->checkLang($id);

        return view($page->template)->with('page', $page);
    }


    public function map()
    {
        return view('front-end.contact.map');
    }


//    public function subjects()
//    {
//        $subjects = Subject::paginate(9);
//        return view('front-end.subjects.subjects', compact('subjects'));
//    }

    public function registration($id)
    {
        $page = Enpage::findOrFail($id);
        return view('front-end.registration.registration', compact('page'));
    }


    public function contact()
    {

        return view('front-end.contact.contact');
    }


    public function application()
    {

        return view('front-end.applications.application');
    }

    public function storeApplication(Request $request)
    {

        $application = request()->validate([
                'name' => ['required', 'string', 'min:3', 'max:25'],
                'age' => ['required', 'numeric', 'between:18,70'],
                'type' => ['required', ''],
                'college' => ['required'],
                'student_number' => ['required'],
                'phone' => ['required'],
                'mobile' => ['required', 'numeric'],
                'email' => ['required', 'email'],
                'subject_id' => ['required'],
                'knowabout_id' => ['required']
            ]
        );

        Application::create($application);


        return redirect()->route('front.application')->with('success', 'Application has created successfully');
    }


//    public function teachers()
//    {
//        $teachers = collect([['name' => 'hh', 'content' => 'content yaaa anata'],
//            ['name' => 'hh2', 'content' => 'content yaaa anata2'],
//            ['name' => 'hh3', 'content' => 'content yaaa 3'],
//            ['name' => 'hh4', 'content' => 'content yaaa anata'],
//            ['name' => 'hh5', 'content' => 'content yaaa anata2'],
//            ['name' => 'hh6', 'content' => 'content yaaa 3'],
//            ['name' => 'hh7', 'content' => 'content yaaa 3'],
//            ['name' => 'hh', 'content' => 'content yaaa anata'],
//            ['name' => 'hh2', 'content' => 'content yaaa anata2'],
//            ['name' => 'hh3', 'content' => 'content yaaa 3'],
//            ['name' => 'hh4', 'content' => 'content yaaa anata'],
//        ]);
//        return view('front-end.teachers.teachers', compact('teachers'));
//    }

    public function profile()
    {
        return view('front-end.teachers.profile');
    }

    public function services()
    {
        return view('front-end.service.services');
    }

    public function about()
    {
        return view('front-end.knowAbout.know_about');
    }

    public function advertisings()
    {
        $advs = Enpage::all()->where('type', 2);
        return view('front-end.event.advertising', compact('advs'));
    }

    public function advertising($id)
    {
        $page = Enpage::findOrFail($id);
        return view('front-end.homePage.commonPage', compact('page'));
    }

    public function news()
    {
        $news = Enpage::all()->where('type', 1);
        return view('front-end.event.news', compact('news'));
    }

    public function singleNews($id)
    {
        $page = Enpage::findOrFail($id);
        return view('front-end.homePage.commonPage', compact('page'));
    }

}


