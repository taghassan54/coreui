<section class="extTeams cid-rRwHbYrqWw" id="extTeams8-37">




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="mbr-section-title mbr-normal mbr-fonts-style align-left display-5">Events</h2>
            </div>
        </div>
        <div class="row row-content justify-content-center">




            @foreach($events as $item)
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
                               <a href="/single-event/{{ $item->id }}"> <p class="mbr-text mbr-fonts-style phone mbr-normal display-4">Read More &gt;</p></a>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
            @endforeach






        </div>
    </div>


</section>
