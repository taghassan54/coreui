<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SliderRepository;
use App\Repositories\ProgrammAndServiceRepository;
use App\Repositories\FooterRepository;
use App\Models\Footer;
use App\Models\Post;
use App\Models\Gallery;
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
        $this->middleware('auth')->except("welcome","gallery");
        $this->sliderRepository = $sliderRepo;
        $this->programmAndServiceRepository = $programmAndServiceRepo;
        $this->footer = Footer::first();
        $this->posts = Post::where('status','publish')->orderBy('id','DESC')->get();

    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $posts= $this->posts->take(5);
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
        $posts= $this->posts->take(2);
        $faq= FrequentlyAskedQuestion::all();
        return view('club',compact('posts','faq'));
    }
    public function blogs()
    {
        $posts= $this->posts;

        return view('blogs',compact('posts'));
    }
    public function index()
    {
        return view('home');
    }
}
