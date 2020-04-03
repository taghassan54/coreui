
@extends('layouts.user')

@section('content')

<section class="mbr-section content5 cid-rSciXwshhe mbr-parallax-background" id="content5-50">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(150, 150, 150);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Our Partners</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"></h3>


            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-rScjdBThvJ" id="content2-53">



    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-10 mbr-fonts-style display-7">
                <blockquote>

                    {!! $settings->where('key','Our Partners')->first()?$settings->where('key','Our Partners')->first()->value:'' !!}

                </blockquote>
            </div>
        </div>
    </div>
</section>

<section class="carousel slide testimonials-slider cid-rScjnAd8LH" data-interval="false" id="testimonials-slider1-54">





    <div class="container text-center">


        <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">


                @foreach ($oure_partners as $item)
                <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            {{ $item->getFirstMedia() }}
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                {{ $item->aboute }}

                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            {{ $item->name }}

                        </div>
                        <div class="user_desk mbr-light mbr-fonts-style display-7">
                           {{ $item->Position }}
                        </div>
                    </div>
                </div>
                @endforeach


            </div>

            <div class="carousel-controls">
                <a class="carousel-control-prev" role="button" data-slide="prev">
                    <span aria-hidden="true" class="mbri-arrow-prev mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" role="button" data-slide="next">
                    <span aria-hidden="true" class="mbri-arrow-next mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>


@endsection
