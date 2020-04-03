@extends('layouts.user')

@section('content')

<section class="mbr-section content5 cid-rRxqJTd0re mbr-parallax-background" id="content5-3y">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(150, 150, 150);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">{{ $event->title }}</h2>
                <p></p>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">{{ $event->date }}</h3>


            </div>
        </div>
    </div>
</section>

<section class="extSlider testimonials-slider cid-rRxqJUkz2Q" data-interval="false" id="extSlider2-3z">



    <div class="main container">
        <div class="row">
            <div class="first-col col-md-6">
                <h3 class="mbr-section-subtitle  mbr-fonts-style align-left mbr-regular display-7">

                    {!! $event->text !!}

                </h3>

            </div>

            <div class="second-col col-md-6">
                <div class="carousel slide slides" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" class="active"></li>
                        <li data-slide-to="1"></li>
                        <li data-slide-to="2"></li>







                    </ol>
                    <div class="carousel-inner">




                        @forelse ($event->getMedia() as $media)

                        <div class="carousel-item ">
                            <div class="media-container-row">
                                <div class="col-md-12">
                                    <div class="wrap-img ">
                                        <img src="{{ $media->getUrl() }}" class="img-responsive clients-img" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse


                        <div class="carousel-item ">
                            <div class="media-container-row">
                                <div class="col-md-12">
                                    <div class="wrap-img ">
                                        <img src="assets/images/3.jpg" class="img-responsive clients-img" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="media-container-row">
                                <div class="col-md-12">
                                    <div class="wrap-img ">
                                        <img src="assets/images/2.jpg" class="img-responsive clients-img" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
