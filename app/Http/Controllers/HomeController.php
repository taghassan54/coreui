<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SliderRepository;
use App\Repositories\ProgrammAndServiceRepository;
use App\Repositories\FooterRepository;
use App\Models\Footer;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\OurTeam;
use App\Models\Event;
use App\Models\News;
use App\Models\Library;
use App\Models\LibraryType;
use App\Models\PrivacyPolicy;
use App\Models\Partners;
use App\Models\FrequentlyAskedQuestion;

class HomeController extends Controller
{

    private $sliderRepository;
    private $programmAndServiceRepository;
    private $footer;
    private $posts;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SliderRepository $sliderRepo,ProgrammAndServiceRepository $programmAndServiceRepo,FooterRepository $footerRepo)
    {
        $this->middleware('auth')->only("index");
        $this->sliderRepository = $sliderRepo;
        $this->programmAndServiceRepository = $programmAndServiceRepo;
        $this->footer = Footer::first();
        $this->posts = Post::where('status','publish')->orderBy('id','DESC');

    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $posts= $this->posts->get()->take(5);
         $sliders = $this->sliderRepository->all();
         $pas = $this->programmAndServiceRepository->all([],0,6);
        return view('welcome',compact('sliders','pas','posts'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        $galleries=Gallery::all();
        return view('gallery',compact('galleries'));
    }
    public function club()
    {
        $posts= $this->posts->get()->take(2);
        $faq= FrequentlyAskedQuestion::all();
        return view('club',compact('posts','faq'));
    }
    public function blogs()
    {
        $posts= $this->posts->paginate(5);

        return view('blogs',compact('posts'));
    }
    public function news_events()
    {
        $events= Event::paginate(5);
        $news= News::paginate(5);

        return view('news-events',compact('events','news'));
    }
    public function about_us()
    {
        $our_team= OurTeam::all();

        return view('about-us',compact('our_team'));
    }
    public function privacy_policies()
    {
        $privacy_policies= PrivacyPolicy::all();

        return view('privacy-policies',compact('privacy_policies'));
    }
    public function library()
    {
        $libraries= Library::all();
        $library_types= LibraryType::all();

        return view('library',compact('libraries','library_types'));
    }
    public function oure_partners()
    {
        $oure_partners= Partners::all();


        return view('oure-partners',compact('oure_partners'));
    }
    public function index()
    {
        return view('home');
    }
}
