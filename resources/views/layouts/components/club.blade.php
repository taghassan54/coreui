
    @section('css')
        <style>
            .cid-rRr2sY9lRj P{
                color: black
            }
        </style>
    @endsection
    <section class="mbr-section content5 cid-rRwhho4p8F mbr-parallax-background" id="content5-2j">



        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(150, 150, 150);">
        </div>

        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">FSQO CLUB</h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"></h3>


                </div>
            </div>
        </div>
    </section>

    <section class="extFeatures cid-rRr2sY9lRj" id="extFeatures42-z">




        <div class="container">




            <div class="row justify-content-center">
                <div class="card col1 p-3 col-12 col-md-8 col-lg-4">
                    <div class="card-wrapper">
                        <div class="text-wrap align-left">

                            <h2 class="mbr-section-title align-left py-4 mbr-semibold mbr-white mbr-fonts-style display-2">Blogs</h2>
                            <p class="mbr-text mbr-black align-left mbr-regular mbr-light mbr-fonts-style display-5">
                                {{ $settings->where('key','FSQO CLUB')->first()?$settings->where('key','FSQO CLUB')->first()->value:'' }}
                                <br><br>
                                <a href="/blogs"><strong>Read More blogs &gt;</strong></a></p>
                        </div>
                    </div>
                </div>
                @forelse ($posts as $post)
                <div class="card col2 p-3 col-12 col-md-8 col-lg-4">
                    <div class="card-wrapper">
                        <div class="img-wrap">
                            <img src="{{ $post->getFirstMediaUrl() }}" alt="">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-2 align-left mbr-white mbr-fonts-style display-5">{{ $post->title }}</h4>
                            <p class="mbr-text align-left mbr-regular mbr- mbr-fonts-style display-4">By {{ $post->auther }} <br>{!! $post->created_at !!}<br><br>{!! $post->summary !!}</p>
                        </div>
                        <a href="/singlepost/{{ encrypt($post->id) }}"><span class="mbr-iconfont icon mobi-mbri-right mobi-mbri  fa fa-arrow-right" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span></a>
                    </div>
                </div>
                @empty

                @endforelse


            </div>
        </div>
    </section>

    <section class="accordion1 cid-rRfk1quCcJ" id="extAccordion8-i">




        <div class="container-fluid">
            <div class="media-container-row align-center">
                <div class="col-12 col-md-12">
                    <h2 class="mbr-section-title mbr-fonts-style display-2">Frequently Asked Questions</h2>
                    <div class="underline align-center pb-3">
                        <div class="line"></div>
                    </div>

                    <div id="bootstrap-accordion_21" class="panel-group accordionStyles accordion col-sm-12 col-md-10 col-lg-8 align-left pt-5" role="tablist" aria-multiselectable="true">
                       @foreach ($faq as $item)
                       <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="collapsed panel-title" data-toggle="collapse" data-core="" href="#collapse1_{{ $item->id }}" aria-expanded="false" aria-controls="collapse1">
                                <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                <h6 class="mbr-fonts-style header-text display-6">
                                    {{ $item->question }}
                                </h6>
                            </a>
                        </div>
                        <div id="collapse1_{{ $item->id }}" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_21">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                        {{ $item->answer }}
                                    </p>
                            </div>
                        </div>
                    </div>
                       @endforeach





                    </div>
                </div>
            </div>
        </div>
    </section>





 <section class="extForm cid-rRfjmIhpdW mbr-parallax-background" id="extForm7-d">
    <div class="container">
        <div class="row main-row justify-content-center">

            <div class="col-sm-10 col-lg-10 col-md-10 text-block">
                <div class="content-panel">
                    <h2 class="mbr-section-title mbr-fonts-style align-left mbr-white pb-2 display-2">
                        Join Us Now</h2>
                    <p class="content-block mbr-fonts-style align-left m-0 display-7">
                        Fill this Form and be a member of the team . Fill this Form and be a member of the team . Fill this Form and be a member of the team . Fill this Form and be a member of the team .

                    </p>

                    <div class="col-md-12 input-group-btn">
                        <a href="/individual"><button type="submit" class="btn btn-form btn-primary display-4">Individual</button></a>
                        <a href="/corporate" class="btn btn-form btn-primary display-4">Corporate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
