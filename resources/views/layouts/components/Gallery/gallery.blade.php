@section('css')
<link rel="stylesheet" href="/assets/gallery/style.css">
@endsection

<section class="mbr-section content5 cid-rRwgJmT0ds mbr-parallax-background" id="content5-2i">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(150, 150, 150);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Gallery</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"></h3>


            </div>
        </div>
    </div>
</section>

@include('layouts.components.Gallery.media')

@section('js')
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
@endsection
