<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SliderRepository;
use App\Repositories\ProgrammAndServiceRepository;
class HomeController extends Controller
{

    private $sliderRepository;
    private $programmAndServiceRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SliderRepository $sliderRepo,ProgrammAndServiceRepository $programmAndServiceRepo)
    {
        $this->middleware('auth')->except("welcome");
        $this->sliderRepository = $sliderRepo;
        $this->programmAndServiceRepository = $programmAndServiceRepo;

    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
         $sliders = $this->sliderRepository->all();
         $pas = $this->programmAndServiceRepository->all([],0,6);

        return view('welcome',compact('sliders','pas'));
    }
    public function index()
    {
        return view('home');
    }
}
