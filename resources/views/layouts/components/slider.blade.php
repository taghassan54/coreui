<section class="carousel slide cid-rRvUP6EdWV" data-interval="false" id="slider1-19">



    <div class="full-screen">
        <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
            <ol class="carousel-indicators">
                @forelse ($sliders->where('type',0) as $slider)
                <li data-app-prevent-settings="" data-target="#slider1-19" class="active" data-slide-to="0"></li>
                @empty

                @endforelse
            </ol>
            <div class="carousel-inner" role="listbox">


                @forelse ($sliders->where('type',0) as $slider)
                <div class="carousel-item slider-fullscreen-image {{ $loop->first?'active':'' }} " data-bg-video-slide="false" style="background-image: url({{ $slider->getFirstMediaUrl() }}">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(91, 104, 107);"></div><img src="{{ $slider->getFirstMediaUrl() }}" alt="" title="">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-left">
                                    <h2 class="mbr-fonts-style display-1">{{ $slider->title }} .</h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">{{ $slider->text }} .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="carousel-item slider-fullscreen-image active " data-bg-video-slide="false" style="background-image: url(/assets/images/background-1366x768.jpg">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(91, 104, 107);"></div><img src="/assets/images/background-1366x768.jpg" alt="" title="">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-left">
                                    <h2 class="mbr-fonts-style display-1"></h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse

            </div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-19"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a>
            <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-19"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a>
        </div>
    </div>

</section>
