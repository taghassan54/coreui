@extends('layouts.user')

@section('content')


<section class="mbr-section content5 cid-rRwjwF9odw mbr-parallax-background" id="content5-2l">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(150, 150, 150);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Library</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"></h3>


            </div>
        </div>
    </div>
</section>

<section class="extTabs cid-rRwjGVL9sh" id="extTabs7-2n">




    <div class="container">


        <div class="media-container-row">
            <div class="col-12 col-md-10">
                <ul class="nav nav-tabs" role="tablist">
                    @foreach ($library_types as $item)
                    <li class="nav-item"><a class="nav-link mbr-fonts-style show {{ $loop->first?'active':'' }} display-5" role="tab" data-toggle="tab" href="/#extTabs7-2n_tab{{$loop->iteration-1}}" aria-selected="true">
                        {{ $item->name }}</a></li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach ($library_types as $item)

                    <div id="tab{{$loop->iteration-1}}" class="tab-pane in {{ $loop->first?'active':'' }} " role="tabpanel">
                        <div class="row">
                                @foreach ($item->libraries as $library)

                                <div class="col-md-12 col-lg-6 pb-3 item-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-md-4">
                                            <div class="image-wrap">
                                                <img src="/assets/images/pdf-icon-216x216.png" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row card-box">
                                                <div class="col-md-8">
                                                    <a href="{{ $library->getFirstMediaUrl() }}" target="_blank()"><h3 class="mbr-text mbr-fonts-style align-left display-7"><br>Download {{-- &nbsp;| Open --}}</h3></a>
                                                </div>
                                                <div class="col-md-4">
                                                    {{-- <p class="mbr-price  mbr-fonts-style align-right display-4">free</p> --}}
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="mbr-desc mbr-fonts-style align-left display-7">{{ $library->name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                    </div>



                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<script src="/assets/web/assets/jquery/jquery.min.js"></script>


<script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="/assets/tether/tether.min.js"></script>
<script src="/assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="/assets/parallax/jarallax.min.js"></script>
<script src="/assets/mobirise-tabs/mbr-tabs.js"></script>
<script src="/assets/theme/js/script.js"></script>
<script src="/assets/formoid/formoid.min.js"></script>


@endsection



