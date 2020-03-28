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


<section class="form cid-rRI6YWS629" id="formbuilder-5f">


    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto mbr-form form-col" data-form-type="formoid">
                <!--Formbuilder Form-->
                <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler"
                    data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" <div
                        class="form-row">
                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling
                        out the form!</div>
                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                        problem!</div>
            </div>
            <div class="dragArea form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h4 class="mbr-section-title mbr-bold pb-1 mbr-fonts-style display-1">Membership Form</h4>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <hr>
                </div>
                <div data-for="entity_type" class="col-lg-12 col-md-12 col-sm-12 form-group"
                    style="transform: translateZ(1px);">
                    <label for="Entity Type-formbuilder-5f" class="form-control-label mbr-fonts-style display-7">Entity
                        Type</label>
                    <select name="Entity Type" data-form-field="Entity Type" class="form-control display-7"
                        id="Entity Type-formbuilder-5f">
                        <option value="Private">Private</option>
                        <option value="Second">Second</option>
                        <option value="Third">Third</option>
                    </select>
                </div>
                <div data-for="name" class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <input type="text" name="name" placeholder="Full name of Entitiy in Arabic" data-form-field="name"
                        class="form-control display-7" value="" id="name-formbuilder-5f">
                </div>

                <div data-for="text9" class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <label for="text9-formbuilder-5f"
                        class="form-control-label mbr-fonts-style display-7">Apprevation</label>
                    <input type="text" name="apprevation" data-form-field="text9" class="form-control display-7"
                        value="" id="text9-formbuilder-5f">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-group" data-for="date"
                    style="transform: translateZ(0px);">
                    <label for="date-formbuilder-5f" class="form-control-label mbr-fonts-style display-7">Date
                        of establishment</label>
                    <input type="date" name="date" data-form-field="date" class="form-control display-7"
                        value="2018-07-22" id="date-formbuilder-5f">
                </div>
                @include('forms.form_components.address')
                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="text4"
                    style="transform: translateZ(0px);">
                    <label for="text4-formbuilder-5f" class="form-control-label mbr-fonts-style display-7">Other
                        Memberships if Available </label>
                    <input type="text" name="text4" placeholder="Text" data-form-field="text4"
                        class="form-control display-7" value="" id="text4-formbuilder-5f">
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p class="mbr-fonts-style display-7">If you would like to share your entity name as one of
                        the partenrs :</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="text5">
                    <input type="text" name="text5" placeholder="Name of the responisble personal for communication"
                        data-form-field="text5" class="form-control display-7" value="" id="text5-formbuilder-5f">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="text6"
                    style="transform: translateZ(0px);">
                    <input type="text" name="text6" placeholder="Section/Sector" data-form-field="text6"
                        class="form-control display-7" value="" id="text6-formbuilder-5f">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="text1">
                    <input type="text" name="text1" placeholder="Job Title" data-form-field="text1"
                        class="form-control display-7" value="" id="text1-formbuilder-5f">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="email">
                    <input type="email" name="email" placeholder="Email" data-form-field="email"
                        class="form-control display-7" value="" id="email-formbuilder-5f">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="phone">
                    <input type="tel" name="phone" placeholder="Phone" data-form-field="phone"
                        class="form-control display-7" pattern="[0-9]" value="" id="phone-formbuilder-5f">
                </div>

                @include('forms.form_components.comments')

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary display-7">Submit</button>
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
