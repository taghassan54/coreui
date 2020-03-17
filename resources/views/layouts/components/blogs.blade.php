<section class="mbr-section content4 cid-rRwtoHp7R4" id="content4-2u">



    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-12">
                <h2 class="align-center pb-3 mbr-fonts-style display-5">
                    Latest Blogs</h2>


            </div>
        </div>
    </div>
</section>

<section class="features5 carousel slide testimonials-slider extSlider cid-rRwpP6v87O" data-interval="false" id="features5-2t">





    <div class="container text-white">

        <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner">




                @forelse ($posts as $post)
                <div class="carousel-item">
                    <div class="media-container-row flex-md-row flex-column-reverse text-left align-items-center">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4 col-md-6 text-element">
                            <div class="title-content">
                                <h2 class="mbr-title mbr-bold mbr-fonts-style display-5"> {{$post->title}} </h2>
                                <p class="mbr-text mbr-fonts-style display-7">{{$post->created_at	}}</p>
                                <p class="card__title mbr-fonts-style display-7"> {!! $post->summary !!} .</p>
                               <a href="#"> <p class="card__text mbr-fonts-style display-4">Read More </p></a>

                            </div>

                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-lg-6 col-md-5">
                            <div class="img-wrap" style="height:100%; width: 100%;">
                                <img src="{{$post->getFirstMediaUrl()}}" class="table-image" alt="" title="img title">
                            </div>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse


            </div>

            <div class="carousel-indicators">
                @forelse ($posts as $post)
                <li data-slide-to="{{$loop->iteration-1}}" class="{{ $loop->first?'active':'' }} "></li>
                @empty

                @endforelse








            </div>
            <div class="carousel-controls">
                <a class="carousel-control-prev" role="button" data-slide="prev">
                    <span aria-hidden="true" class="mbri-arrow-prev mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" role="button" data-slide="next">
                    <span aria-hidden="true" class="mbri-arrow-next mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
