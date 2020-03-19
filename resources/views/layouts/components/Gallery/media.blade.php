
<section class="mbr-gallery mbr-slider-carousel cid-rRfmiJi9aQ" id="gallery2-r">



    <div class="container">
        <div>
            <!-- Filter -->
            <div class="mbr-gallery-filter container gallery-filter-active">
                <ul buttons="0">
                    <li class="mbr-gallery-filter-all"><a class="btn btn-md btn-primary-outline active display-7" href="">All</a></li>
                </ul>
            </div>
            <!-- Gallery -->
            <div class="mbr-gallery-row">
                <div class="mbr-gallery-layout-default">
                    <div>
                        <div>

                            @forelse ($galleries as $gallery)

                            @if ($gallery->type=='video')
                            <div class="mbr-gallery-item mbr-gallery-item--p2 video-slide" data-video-url="{{ $gallery->youtube }}" data-tags="{{ $gallery->type }}">
                                <div href="#lb-gallery2-r" data-slide-to="{{$loop->iteration-1}}" data-toggle="modal">
                                    <div></div><img alt="" src="{{ $gallery->getFirstMediaUrl() }}"><span class="icon-video"></span><span class="mbr-gallery-title mbr-fonts-style display-7">{{ $gallery->title }}</span></div>
                            </div>
                            @else
                            <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="{{ $gallery->type }}">
                                <div href="#lb-gallery2-r" data-slide-to="{{$loop->iteration-1}}" data-toggle="modal"><img src="{{ $gallery->getFirstMediaUrl() }}" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">{{ $gallery->title }}</span></div>
                            </div>
                            @endif

                            @empty

                            @endforelse

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Lightbox -->
            <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-r">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel-inner">
                                @forelse ($galleries as $gallery)
                                @if ($gallery->type=='video')
                                <div class="carousel-item  {{ $loop->first?'active':'' }}  video-container"><img src="{{ $gallery->getFirstMediaUrl() }}" alt="" title=""></div>
                                @else
                                <div class="carousel-item"><img src="{{ $gallery->getFirstMediaUrl() }}" alt="" title=""></div>
                                @endif
                                @empty

                                @endforelse
                            </div>
                            <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-r"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next"
                                role="button" data-slide="next" href="#lb-gallery2-r"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                            <a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
