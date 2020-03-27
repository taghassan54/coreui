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
                <div class="card-img ">
                    <img class="img-icon" src="{{ $ourTeam->getFirstMediaUrl() }}" alt="">
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
