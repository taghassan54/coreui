@extends('layouts.user')

@section('content')


<section class="mbr-section content5 cid-rRwK8TCigd mbr-parallax-background" id="content5-3d">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(150, 150, 150);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">Terms And Conditions</h3>


            </div>
        </div>
    </div>
</section>



<section class="extSlider testimonials-slider cid-rRwKDXlXi1" data-interval="false" id="extSlider2-3f">



    <div class="main container">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style mbr-bold align-left display-2">&nbsp;</h2>
        <div class="row">
            <div class="first-col col-md-12">
              <h6>  {!! $settings->where('key','Terms And Conditions')->first()?$settings->where('key','Terms And Conditions')->first()->value:'' !!}</h6>
              <br>
            </div>

        </div>
    </div>
</section>


@endsection
