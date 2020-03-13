<section class="mbr-wowslider-container mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-wowslider-container--boundary" data-ride="carousel" data-keyboard="false" data-wrap="true" data-interval="false" id="wowslider-46" data-rv-view="152"
    style="background-color: rgb(255, 255, 255);">
    <div class="mbr-wowslider">
        <div class="ws_images">
            <ul>
                @forelse ($sliders->where('type',1) as $slider)
                <li>

                    <img src="{{ $slider->getFirstMediaUrl() }}" alt="title 1" title="title 1"> text 1
                </li>
                @empty

                @endforelse

            </ul>
        </div>
        <div class="ws_bullets">
            <div>
                @forelse ($sliders->where('type',1) as $slider)
                <a href="#" title="">
                    <span><img alt="slide1" src="{{ $slider->getFirstMediaUrl() }}"></span>
                </a>

             
                @empty

                @endforelse

            </div>
        </div>
        <div class="ws_shadow"></div>
        <div class="mbr-wowslider-options">
            <div class="params" data-paddingbottom="0" data-anim-type="slider" data-theme="boundary" data-autoplay="true" data-paddingtop="0" data-fullscreen="true" data-showbullets="false" data-timeout="2" data-duration="2" data-height="576" data-width="1024" data-responsive="2"
                data-showcaptions="false" data-captionseffect="slide" data-hidecontrols="false"></div>
        </div>
    </div>
</section>
