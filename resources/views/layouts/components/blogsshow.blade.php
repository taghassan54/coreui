<section class="mbr-section content5 cid-rRwNqeNq1l mbr-parallax-background" id="content5-3j">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(150, 150, 150);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    Blogs</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"></h3>


            </div>
        </div>
    </div>
</section>

<section class="extTeams cid-rRwNqgw8AY" id="extTeams8-3k">




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="mbr-section-title mbr-normal mbr-fonts-style align-left display-5">Blogs</h2>
            </div>
        </div>
        <div class="row row-content justify-content-center">


            @forelse ($posts as $post)

            <div class="card py-4 col-md-12 " >
                <div class="card-wrapper" style="padding:10px">
                    <div class="card-img">
                        <img src="{{ $post->getFirstMediaUrl() }}" title="" alt="">
                    </div>
                    <div class="card-box">
                        <div class="text-box">
                            <h4 class="card-title mbr-fonts-style mbr-normal display-5">{{ $post->title }}</h4>
                            <p class="mbr-text mbr-fonts-style status mbr-normal display-4">
                                {!! $post->created_at !!} &nbsp;/ &nbsp;By : {{ $post->auther }}</p>

                            <p class="mbr-text mbr-fonts-style mbr-normal display-4"> {!! $post->summary !!} ... </p>
                        </div>
                        <div class="ico-wrap">
                            <div class="ico-box">
                                <a href="/singlepost/{{ encrypt($post->id) }}"> <p class="mbr-text mbr-fonts-style phone mbr-normal display-4">Read More &gt;</p> </a>
                            </div>


                        </div>
                    </div>
                </div>


            </div>

            @empty

            @endforelse
{{ $posts->links() }}





        </div>
    </div>


</section>
