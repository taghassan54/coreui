<section class="extTeams cid-rRwHbYrqWw" id="extTeams8-37">




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="mbr-section-title mbr-normal mbr-fonts-style align-left display-5">News</h2>
            </div>
        </div>
        <div class="row row-content justify-content-center">

            @foreach($news as $item)
            <div class="card py-4 col-md-12">
                <div class="card-wrapper" style="padding:10px">
                    <div class="card-img">
                        <img src="{{ $item->getFirstMediaUrl() }}" title="" alt="">
                    </div>
                    <div class="card-box">
                        <div class="text-box">
                            <h4 class="card-title mbr-fonts-style mbr-normal display-5">{{ $item->title }}</h4>
                            <p class="mbr-text mbr-fonts-style status mbr-normal display-4">
                                {{ $item->date }} </p>

                            <p class="mbr-text mbr-fonts-style mbr-normal display-4">
                                {{ $item->text }} </p>
                        </div>
                        <div class="ico-wrap">
                            <div class="ico-box">
                               <a href="/single-news/{{ $item->id }}"> <p class="mbr-text mbr-fonts-style phone mbr-normal display-4">Read More &gt;</p> </a>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
            @endforeach

        </div>

{{--
        <div class="row row-content justify-content-center">

            <div class="card py-4 col-md-12">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/mbr-666x444.jpg" title="" alt="">
                    </div>
                    <div class="card-box">
                        <div class="text-box">
                            <h4 class="card-title mbr-fonts-style mbr-normal display-5">ENOC celebrates 44th UAE National Day</h4>
                            <p class="mbr-text mbr-fonts-style status mbr-normal display-4">
                                25-4-2012</p>

                            <p class="mbr-text mbr-fonts-style mbr-normal display-4">
                                ENOC sponsored the 15th Interschool Environmental Public Speaking Competition, which is organised by Emirates Environmental Group. This bi-lingual competition empowers the youth to take charge of ... </p>
                        </div>
                        <div class="ico-wrap">
                            <div class="ico-box">
                                <p class="mbr-text mbr-fonts-style phone mbr-normal display-4">Read More &gt;</p>
                            </div>


                        </div>
                    </div>
                </div>


            </div>

        </div> --}}

    </div>


</section>
