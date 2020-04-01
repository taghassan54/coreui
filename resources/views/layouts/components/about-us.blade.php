<link rel="stylesheet" href="/assets/web/assets/mobirise-icons/mobirise-icons.css">
<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="/assets/socicon/css/styles.css">
<link rel="stylesheet" href="/assets/dropdown/css/style.css">
<link rel="stylesheet" href="/assets/animatecss/animate.min.css">
<link rel="stylesheet" href="/assets/tether/tether.min.css">
<link rel="stylesheet" href="/assets/theme/css/style.css">
<link rel="stylesheet" href="/assets/gallery/style.css">
<link rel="stylesheet" href="/assets/formoid-css/recaptcha.css">
<link href="/assets/fonts/style.css" rel="stylesheet">
<link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css">
<link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">



<section class="mbr-section content5 cid-rRwunMHCWB mbr-parallax-background" id="content5-2w">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(150, 150, 150);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">About Us</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"></h3>


            </div>
        </div>
    </div>
</section>

<section class="extFeatures cid-rRwbCGcX1D" id="extFeatures43-2e">


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col align-left">
                <div class="overlay-wrapper">
                    <div class="overlay"></div>
                    <div class="img-content">

                    </div>
                </div>
                <div class="box-content">
                    <div class="content1">
                        <h4 class="box-title2 mbr-medium mbr-white pb-2 mbr-fonts-style display-2"><strong>Our Mission</strong></h4>
                        <h3 class="box-text2 mbr-regular mbr-white pb-2 mbr-fonts-style display-5">
                            {{ $settings->where('key','Our Mission')->first()?$settings->where('key','Our Mission')->first()->value:'' }}
                        </h3>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 block2 align-left">
                <div class="content-block">

                    <h2 class="mbr-section-title mbr-semibold mbr-black pb-4 mbr-fonts-style display-2">Our Vision</h2>
                    <p class="mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-7">
                        {{ $settings->where('key','Our Vision')->first()?$settings->where('key','Our Vision')->first()->value:'' }}
                        <br>
                    </p>

                </div>
            </div>


        </div>
    </div>
</section>

<section class="extTeams cid-rRw9V2TYqj" id="extTeams11-2a">




    <div class="container">
        <h2 class="mbr-section-title  pb-3 mbr-fonts-style align-center  display-2">
            Our Team
        </h2>
        <h3 class="mbr-section-subtitle pb-4 mbr-fonts-style align-center mbr-light display-5">
        </h3>
        <div class="media-container-row">

            @forelse ($our_team as $ourTeam)
            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img " style="height: 200px;">
                    <img class="img-icon" src="{{ $ourTeam->getFirstMediaUrl() }}"  style="height: 200px;"  alt="">
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style mbr-semibold display-5">{{ $ourTeam->name }}</h4>
                    <h5 class="user-desc mbr-fonts-style display-4">
                        {{ $ourTeam->position }}
                    </h5>
                    <p class="mbr-text mbr-fonts-style display-7">
                        {{ $ourTeam->aboute }}
                    </p>

                </div>
            </div>

            @empty

            @endforelse

        </div>
    </div>
</section>




<section class="mbr-gallery mbr-slider-carousel cid-rRTk0pn3T5" id="gallery3-4d">



    <div>
        <div>
            <!-- Filter -->
            <!-- Gallery -->
            <div class="mbr-gallery-row">
                <div class="mbr-gallery-layout-default">
                    <div>
                        <div>
                            <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Awesome">
                                <div href="#lb-gallery3-4d" data-slide-to="0" data-toggle="modal"><img src="/assets/images/background1.jpg" alt="" title=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Responsive">
                                <div href="#lb-gallery3-4d" data-slide-to="1" data-toggle="modal"><img src="/assets/images/background2.jpg" alt="" title=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Creative">
                                <div href="#lb-gallery3-4d" data-slide-to="2" data-toggle="modal"><img src="/assets/images/background3.jpg" alt="" title=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Animated">
                                <div href="#lb-gallery3-4d" data-slide-to="3" data-toggle="modal"><img src="/assets/images/background4.jpg" alt="" title=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Awesome">
                                <div href="#lb-gallery3-4d" data-slide-to="4" data-toggle="modal"><img src="/assets/images/background5.jpg" alt="" title=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Awesome">
                                <div href="#lb-gallery3-4d" data-slide-to="5" data-toggle="modal"><img src="/assets/images/background6.jpg" alt="" title=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Responsive">
                                <div href="#lb-gallery3-4d" data-slide-to="6" data-toggle="modal"><img src="/assets/images/background7.jpg" alt="" title=""><span class="icon-focus"></span></div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Animated">
                                <div href="#lb-gallery3-4d" data-slide-to="7" data-toggle="modal"><img src="/assets/images/background8.jpg" alt="" title=""><span class="icon-focus"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Lightbox -->
            <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-4d">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img src="/assets/images/background1.jpg" alt="" title=""></div>
                                <div class="carousel-item"><img src="/assets/images/background2.jpg" alt="" title=""></div>
                                <div class="carousel-item"><img src="/assets/images/background3.jpg" alt="" title=""></div>
                                <div class="carousel-item"><img src="/assets/images/background4.jpg" alt="" title=""></div>
                                <div class="carousel-item"><img src="/assets/images/background5.jpg" alt="" title=""></div>
                                <div class="carousel-item"><img src="/assets/images/background6.jpg" alt="" title=""></div>
                                <div class="carousel-item"><img src="/assets/images/background7.jpg" alt="" title=""></div>
                                <div class="carousel-item"><img src="/assets/images/background8.jpg" alt="" title=""></div>
                            </div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="/#lb-gallery3-4d"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next"
                                role="button" data-slide="next" href="#lb-gallery3-4d"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                            <a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<script src="/assets/web/assets/jquery/jquery.min.js"></script>
<script src="/assets/popper/popper.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/smoothscroll/smooth-scroll.js"></script>
<script src="/assets/dropdown/js/nav-dropdown.js"></script>
<script src="/assets/dropdown/js/navbar-dropdown.js"></script>
<script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="/assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="/assets/tether/tether.min.js"></script>
<script src="/assets/parallax/jarallax.min.js"></script>
<script src="/assets/masonry/masonry.pkgd.min.js"></script>
<script src="/assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
<script src="/assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
<script src="/assets/theme/js/script.js"></script>
<script src="/assets/gallery/player.min.js"></script>
<script src="/assets/gallery/script.js"></script>
<script src="/assets/slidervideo/script.js"></script>
<script src="/assets/formoid/formoid.min.js"></script>

