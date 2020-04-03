<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="/assets/images/fsqo-logo-128x41-1.png" type="image/x-icon">
    <meta name="description" content="">

    <title>FSOO</title>
    <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="/assets/tether/tether.min.css">
    <link rel="stylesheet" href="/assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="/assets/socicon/css/styles.css">
    <link rel="stylesheet" href="/assets/theme/css/style.css">
    <link rel="stylesheet" href="/assets/wowslider-init/style.css">
    <link rel="stylesheet" href="/assets/formoid-css/recaptcha.css">
    <link href="/assets/fonts/style.css" rel="stylesheet">
    <link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">



    <link rel="stylesheet" href="/assets/wowslider-init/boundary/style.css">
    <style>
        .cid-rRqSZo7FUh h2, .cid-rRqSZo7FUh h3, .cid-rRqSZo7FUh h4{
            color: black
        }
        #our_services{
            background-color: #efefef;
        }
    </style>
    @yield('css')
</head>
<body>
    @include('layouts.components.menu')



    @yield('content')

    @include('layouts.components.donate')
@include('layouts.components.footer')
<script src="/assets/web/assets/jquery/jquery.min.js"></script>
<script src="/assets/popper/popper.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/smoothscroll/smooth-scroll.js"></script>
<script src="/assets/dropdown/js/nav-dropdown.js"></script>
<script src="/assets/dropdown/js/navbar-dropdown.js"></script>
<script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="/assets/tether/tether.min.js"></script>
<script src="/assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="/assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
<script src="/assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
<script src="/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
<script src="/assets/mbr-testimonials-slider/mbr-testimonials-slider.js"></script>
<script src="/assets/parallax/jarallax.min.js"></script>
<script src="/assets/wowslider-plugin/wowslider.js"></script>
<script src="/assets/theme/js/script.js"></script>
<script src="/assets/wowslider-init/script.js"></script>
<script src="/assets/slidervideo/script.js"></script>
<script src="/assets/formoid/formoid.min.js"></script>


<input name="animation" type="hidden">
<script async src="/assets/wowslider-effect/bubbles/script.js"></script>
@yield('js')
</body>

</html>
