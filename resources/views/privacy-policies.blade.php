@extends('layouts.user')

@section('content')


<section class="mbr-section content5 cid-rRwJdo8xq5 mbr-parallax-background" id="content5-3a">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(150, 150, 150);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Privacy Policy</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"></h3>


            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-rRqTsIFrPo" id="content11-w">


    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-12 mbr-fonts-style display-7">
                <ol>
                    @foreach ($privacy_policies as $item)
                    <li>{{ $item->privacy_policy }}</li>
                    @endforeach

                </ol>
                <ol>
                </ol>
            </div>
        </div>
    </div>
</section>


@endsection
