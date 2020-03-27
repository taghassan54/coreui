
    <div class="container-fluid">

        <br>
        <br>
        <br>


        <div class="row">
            <div class="col-12 text-row col-md-6">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    @lang('Our Programs and Services')</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    {{ $settings->where('key','Our Programs and Services')->first()?$settings->where('key','Our Programs and Services')->first()->value:'' }}
                </h3>
                <div class="mbr-section-btn title-btn align-center">
                    {{-- <a class="btn btn-primary-outline display-4" href="#">@lang('homepage.VIEW ALL')</a> --}}
                </div>
            </div>


            @forelse ($pas as $item)

            <div class="card px-3 py-4 col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{{ $item->getFirstMediaUrl() }}" class="rounded img-fluid" style="min-width:250px; min-height:250px; max-height:250px;" alt="">
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-fonts-style align-center display-7">
                            {{ $item->title }}
                        </p>
                        <div class="mbr-section-btn card-btn align-center">
                            <a href="#" class="btn btn-primary display-4">
                                @lang('homepage.READMORE')
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            @empty

            @endforelse


        </div>

        <br>
        <br>
        <br>

    </div>
</section>
{{-- @comments(['model' => $item]) --}}
