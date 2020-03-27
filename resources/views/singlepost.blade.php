@extends('layouts.user')

@section('content')


<section class="mbr-section content5 cid-rRwK8TCigd mbr-parallax-background" id="content5-3d">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(150, 150, 150);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">{{ $post->title }}</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">By {{ $post->auther }} - {{ $post->created_at }}</h3>


            </div>
        </div>
    </div>
</section>

<section class="extSlider testimonials-slider cid-rRwKDXlXi1" data-interval="false" id="extSlider2-3f">



    <div class="main container">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style mbr-bold align-left display-2">&nbsp;</h2>
        <div class="row">
            <div class="first-col col-md-6">
                {!! $post->summary !!}
            </div>

            <div class="second-col col-md-6">
                <div class="carousel slide slides" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
                    <ol class="carousel-indicators">
                        @forelse ($post->getMedia() as $media)
                        <li data-slide-to="{{$loop->iteration-1}}" class=" {{ $loop->first?'active':'' }}"></li>
                        @empty

                        @endforelse
                    </ol>
                    <div class="carousel-inner">


                        @forelse ($post->getMedia() as $media)

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




                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-rRwLU0hF8w" id="content1-3h">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 mbr-fonts-style display-7">
                {!! $post->content !!}
            </div>
        </div>
    </div>
</section>
<section class="mbr-section article content1 cid-rRwLU0hF8w" id="content1-3h">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 mbr-fonts-style display-7">
                @comments(['model' => $post])
            </div>
        </div>
    </div>
</section>


@endsection
