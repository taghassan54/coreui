

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






<section class="mbr-section info1 cid-rRSJapEqmX" id="info1-47">




    <div class="container">

        <br>

        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">
                    Want to Help us ???
                </h3>
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">
                    Join Us or Donate</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-right py-4">

                    <a class="btn btn-primary display-4" data-toggle="modal" data-target="#exampleModalCenter" href="#">DONATE</a></div>
            </div>
        </div>

        <br>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Join Us or Donate</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    {{ $settings->where('key','Join Us or Donate')->first()?$settings->where('key','Join Us or Donate')->first()->value:'' }}
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>
</div>
</div>
</div>

