<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SliderRepository;
use App\Repositories\ProgrammAndServiceRepository;
use App\Repositories\FooterRepository;
use App\Models\Footer;
use App\Models\Post;
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
        $this->posts = Post::where('status','publish')->orderBy('id','DESC')->take(5)->get();

    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $posts= $this->posts;
         $sliders = $this->sliderRepository->all();
         $pas = $this->programmAndServiceRepository->all([],0,6);
        $footer=$this->footer;
        return view('welcome',compact('sliders','pas','footer','posts'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        $posts= $this->posts;
         $sliders = $this->sliderRepository->all();
         $pas = $this->programmAndServiceRepository->all([],0,6);
        $footer=$this->footer;
        return view('gallery',compact('sliders','pas','footer','posts'));
    }
    public function index()
    {
        return view('home');
    }
}
