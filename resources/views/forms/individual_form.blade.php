@extends('layouts.user')

@section('content')

<style>
    .alert {
        color: red
    }
</style>
<section class="mbr-section content5 cid-rRSLu1xn9C mbr-parallax-background" id="content5-4a">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(150, 150, 150);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Join Us</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"></h3>


            </div>
        </div>
    </div>
</section>


<section class="extForm cid-rRI6YWS629" id="extForm17-4m">
    <h6 style="color:#000">
        @include('coreui-templates::common.errors')
        @include('flash::message')
    </h6>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 mx-auto mbr-form form-col" data-form-type="formoid">
                <!--Formbuilder Form-->
                <form action="/memberships" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    @csrf
                    <div class="form-row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling
                            out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea form-row">
                        <div class="col-lg-12">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h2 class="mbr-section-title mbr-bold pb-1 mbr-fonts-style display-1">Membership Form
                                </h2>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <hr>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h5 class="mbr-fonts-style display-5">Personal Information</h5>
                            </div>
                            <div data-for="name" class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label for="name-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Full
                                    Name</label>
                                <input type="text" name="name" data-form-field="name" class="form-control display-7"
                                    required="required" value="" id="name-extForm17-4m">
                            </div>
                            <div data-for="select" class="col-lg-6 col-md-6 col-sm-12 form-group">

                                <label for="select-extForm17-4m"
                                    class="form-control-label mbr-fonts-style display-7">Nationality</label>

                                {!! Form::select('nationality_id', $nationalities->pluck('name','id'), null,
                                ['class'=>'form-control display-7','id'=>'select-extForm17-4m']) !!}

                            </div>
                            <div data-for="radio" class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <div class="form-control-label">
                                    <label for="radio-extForm17-4m" class="mbr-fonts-style display-7">Gender</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="gender" data-form-field="radio"
                                        class="form-check-input display-7" value="Male" checked=""
                                        id="radio-extForm17-4m">
                                    <label class="form-check-label display-7">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="radio" data-form-field="radio"
                                        class="form-check-input display-7" value="Female" id="radio-extForm17-4m">
                                    <label class="form-check-label display-7">Female</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group" data-for="select1">
                                <label for="select1-extForm17-4m"
                                    class="form-control-label mbr-fonts-style display-7">Age</label>
                                {!! Form::select('age_range_id', $ageRanges->pluck('name','id'), null,
                                ['class'=>'form-control display-7','id'=>'select-extForm17-4m']) !!}
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <hr>
                            </div>

                            @include('forms.form_components.address')

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <hr>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h5 class="mbr-fonts-style display-5">Academic Qulaifications</h5>
                            </div>
                            <div data-for="select9" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <select name="select9" data-form-field="select8" class="form-control display-7"
                                    id="select9-extForm17-4m">
                                    <option value="Bachelore">Bachelore</option>
                                    <option value="Post Graduate">Post Graduate</option>
                                    <option value="Master">Master</option>
                                </select>
                            </div>
                            <div data-for="select5" class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label for="select5-extForm17-4m"
                                    class="form-control-label mbr-fonts-style display-7">Specialization</label>
                                {!! Form::select('specialization_id', $specializations->pluck('name','id'), null,
                                ['class'=>'form-control display-7','id'=>'select-extForm17-4m']) !!}

                            </div>
                            <div data-for="select6" class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label for="select6-extForm17-4m"
                                    class="form-control-label mbr-fonts-style display-7">University</label>
                                {!! Form::select('university_id', $university->pluck('name','id'), null,
                                ['class'=>'form-control display-7','id'=>'select-extForm17-4m']) !!}

                            </div>

                            <div data-for="date2" class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label for="date2-extForm17-4m"
                                    class="form-control-label mbr-fonts-style display-7">Graduation Date</label>
                                <input type="date" name="graduation_date" data-form-field="date2"
                                    class="form-control display-7" value="2018-07-22" id="date2-extForm17-4m">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <hr>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h5 class="mbr-fonts-style display-5">Work Experience</h5>
                            </div>
                            <div data-for="text2" class="col-lg-3 col-md-12 col-sm-12 form-group">
                                <label for="text2-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Job
                                    Title</label>
                                <input type="text" name="job_title" placeholder="Text" data-form-field="text2"
                                    class="form-control display-7" value="" id="text2-extForm17-4m">
                            </div>
                            <div data-for="date" class="col-lg-3 col-md-12 col-sm-12 form-group">
                                <label for="date-extForm17-4m"
                                    class="form-control-label mbr-fonts-style display-7">From</label>
                                <input type="date" name="from" data-form-field="date" class="form-control display-7"
                                    value="2018-07-22" id="date-extForm17-4m">
                            </div>
                            <div data-for="date1" class="col-lg-3 col-md-12 col-sm-12 form-group">
                                <label for="date1-extForm17-4m"
                                    class="form-control-label mbr-fonts-style display-7">To</label>
                                <input type="date" name="to" data-form-field="date1" class="form-control display-7"
                                    value="2018-07-22" id="date1-extForm17-4m">
                            </div>
                            <div data-for="text3" class="col-lg-3 col-md-12 col-sm-12 form-group">
                                <label for="text3-extForm17-4m"
                                    class="form-control-label mbr-fonts-style display-7">Work Place</label>
                                <input type="text" name="workplace" placeholder="work place" data-form-field="text3"
                                    class="form-control display-7" value="" id="text3-extForm17-4m">
                            </div>

                            <div data-for="text1" class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label for="text1-extForm17-4m"
                                    class="form-control-label mbr-fonts-style display-7">Email </label>
                                <input type="text" name="email" placeholder="Text" data-form-field="text1"
                                    class="form-control display-7" value="" id="text1-extForm17-4m">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <hr>
                            </div>

                            <div data-for="join" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="join-extForm17-4m" class="form-control-label mbr-fonts-style display-7">I
                                    prefer to join as </label>
                                {!! Form::select('join_as_id', $JoinAs->pluck('name','id'), null,
                                ['class'=>'form-control display-7','id'=>'select-extForm17-4m']) !!}

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <hr>
                            </div>

                            <div data-for="text" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="text-extForm17-4m"
                                    class="form-control-label mbr-fonts-style display-7">Other Memberships</label>
                                <input type="text" name="other_memberships" placeholder="Text" data-form-field="text"
                                    class="form-control display-7" value="" id="text-extForm17-4m">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <hr>
                            </div>  
                            <div data-for="select1" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="select1-extForm17-4m"
                                    class="form-control-label mbr-fonts-style display-7">When is your sparetime </label>
                                {!! Form::select('sparetime_id', $sparetime->pluck('name','id'), null,
                                ['class'=>'form-control display-7','id'=>'select-extForm17-4m']) !!}

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <hr>
                            </div>


                            @include('forms.form_components.comments')

                            <div class="col-lg-12 input-group-btn">
                                <button type="submit" class="btn btn-sm btn-form btn-primary display-7">Send</button>
                            </div>
                        </div>
                </form>
                <!--Formbuilder Form-->
            </div>

        </div>
    </div>
</section>

<div class="modal mbr-popup cid-rRIAcvXqEV fade" tabindex="-1" role="dialog" data-overlay-color="#000000"
    data-overlay-opacity="0.8" id="mbr-popup-4t" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h5 class="modal-title mbr-fonts-style display-5">Popup Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"
                        fill="currentColor">
                        <path
                            d="M31.797 0.191c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.598 0.581 0.342 1.543 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM14.472 17.515c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.613 0.595 0.34 1.562 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM1.144 0.205c-0.584-0.587-1.544 0.336-0.942 0.942l30.654 30.651c0.613 0.625 1.563-0.325 0.942-0.942z">
                        </path>
                    </svg>
                </button>
            </div>

            <div class="modal-body">
                <p class="mbr-text mbr-fonts-style display-7">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore incidunt molestias, vitae
                    recusandae error ipsam
                </p>

                <div>




                </div>
            </div>


        </div>
    </div>
</div>


@endsection
