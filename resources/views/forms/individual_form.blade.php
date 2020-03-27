@extends('layouts.user')

@section('content')


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


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 mx-auto mbr-form form-col" data-form-type="formoid">
                <!--Formbuilder Form-->
                <form action="/memberships" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    @csrf
                    <div class="form-row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div>
                    </div>
                    <div class="dragArea form-row">
                        <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h2 class="mbr-section-title mbr-bold pb-1 mbr-fonts-style display-1">Membership Form</h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h5 class="mbr-fonts-style display-5">Personal Information</h5>
                        </div>
                        <div data-for="name" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="name-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Full Name</label>
                            <input type="text" name="name" data-form-field="name" class="form-control display-7" required="required" value="" id="name-extForm17-4m">
                        </div>
                        <div data-for="select" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="select-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Nationality</label>
                            <select name="select" data-form-field="select" class="form-control display-7" id="select-extForm17-4m">
<option value="Sudanese">Sudanese</option>
<option value="Japanese">Japanese</option>
<option value="Indian">Indian</option>
</select>
                        </div>
                        <div data-for="radio" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <div class="form-control-label">
                                <label for="radio-extForm17-4m" class="mbr-fonts-style display-7">Gender</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="radio" data-form-field="radio" class="form-check-input display-7" value="Male" checked="" id="radio-extForm17-4m">
                                <label class="form-check-label display-7">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="radio" data-form-field="radio" class="form-check-input display-7" value="Female" id="radio-extForm17-4m">
                                <label class="form-check-label display-7">Female</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group" data-for="select1">
                            <label for="select1-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Age</label>
                            <select name="select1" data-form-field="select1" class="form-control display-7" id="select1-extForm17-4m">
<option value="below 20">below 20</option>
<option value="20-30">20-30</option>
<option value="31-40">31-40</option>
</select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h5 class="mbr-fonts-style display-5">Address</h5>
                        </div>
                        <div data-for="text" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="text" name="text" placeholder="Text" data-form-field="text" class="form-control display-7" value="" id="text-extForm17-4m">
                        </div>
                        <div data-for="select3" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="select3-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Country</label>
                            <select name="select3" data-form-field="select2" class="form-control display-7" id="select3-extForm17-4m">
<option value="Sudan">Sudan</option>
<option value="Egypt">Egypt</option>
<option value="UK">UK</option>
</select>
                        </div>
                        <div data-for="select4" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="select4-extForm17-4m" class="form-control-label mbr-fonts-style display-7">City</label>
                            <select name="select4" data-form-field="select3" class="form-control display-7" id="select4-extForm17-4m">
<option value="Select">Select</option>
<option value="Second">Second</option>
<option value="Third">Third</option>
</select>
                        </div>
                        <div data-for="Title" class="col-lg-6 form-group">
                            <input type="text" name="Title" placeholder="District" data-form-field="Title" required="required" class="form-control display-7" value="" id="Title-extForm17-4m">
                        </div>
                        <div data-for="text7" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <input type="text" name="text7" placeholder="Neighbourhood / block" data-form-field="text4" class="form-control display-7" value="" id="text7-extForm17-4m">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h5 class="mbr-fonts-style display-5">Academic Qulaifications</h5>
                        </div>
                        <div data-for="select9" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <select name="select9" data-form-field="select8" class="form-control display-7" id="select9-extForm17-4m">
<option value="Bachelore">Bachelore</option>
<option value="Post Graduate">Post Graduate</option>
<option value="Master">Master</option>
</select>
                        </div>
                        <div data-for="select5" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="select5-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Specialization</label>
                            <select name="select5" data-form-field="select4" class="form-control display-7" id="select5-extForm17-4m">
<option value="Engineering">Engineering</option>
<option value="Medecine">Medecine</option>
<option value="Third">Third</option>
</select>
                        </div>
                        <div data-for="select6" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="select6-extForm17-4m" class="form-control-label mbr-fonts-style display-7">University</label>
                            <select name="select6" data-form-field="select6" class="form-control display-7" id="select6-extForm17-4m">
<option value="Select">Select</option>
<option value="Second">Second</option>
<option value="Third">Third</option>
</select>
                        </div>
                        <div data-for="select7" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="select7-extForm17-4m" class="form-control-label mbr-fonts-style display-7">City</label>
                            <select name="select7" data-form-field="select7" class="form-control display-7" id="select7-extForm17-4m">
<option value="Select">Select</option>
<option value="Second">Second</option>
<option value="Third">Third</option>
</select>
                        </div>
                        <div data-for="date2" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="date2-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Graduation Date</label>
                            <input type="date" name="date2" data-form-field="date2" class="form-control display-7" value="2018-07-22" id="date2-extForm17-4m">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h5 class="mbr-fonts-style display-5">Specialization Field</h5>
                        </div>
                        <div data-for="select8" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <select name="select8" data-form-field="select5" class="form-control display-7" id="select8-extForm17-4m">
<option value="Select">Select</option>
<option value="Second">Second</option>
<option value="Third">Third</option>
</select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h5 class="mbr-fonts-style display-5">Work Experience</h5>
                        </div>
                        <div data-for="text2" class="col-lg-3 col-md-12 col-sm-12 form-group">
                            <label for="text2-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Job Title</label>
                            <input type="text" name="text2" placeholder="Text" data-form-field="text2" class="form-control display-7" value="" id="text2-extForm17-4m">
                        </div>
                        <div data-for="date" class="col-lg-3 col-md-12 col-sm-12 form-group">
                            <label for="date-extForm17-4m" class="form-control-label mbr-fonts-style display-7">From</label>
                            <input type="date" name="date" data-form-field="date" class="form-control display-7" value="2018-07-22" id="date-extForm17-4m">
                        </div>
                        <div data-for="date1" class="col-lg-3 col-md-12 col-sm-12 form-group">
                            <label for="date1-extForm17-4m" class="form-control-label mbr-fonts-style display-7">To</label>
                            <input type="date" name="date1" data-form-field="date1" class="form-control display-7" value="2018-07-22" id="date1-extForm17-4m">
                        </div>
                        <div data-for="text3" class="col-lg-3 col-md-12 col-sm-12 form-group">
                            <label for="text3-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Work Place</label>
                            <input type="text" name="text3" placeholder="Text" data-form-field="text3" class="form-control display-7" value="" id="text3-extForm17-4m">
                        </div>
                        <div data-for="text4" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="text4-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Current Job Title</label>
                            <input type="text" name="text4" placeholder="Text" data-form-field="text1" class="form-control display-7" value="" id="text4-extForm17-4m">
                        </div>
                        <div data-for="text5" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="text5-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Work Place Name</label>
                            <input type="text" name="text5" placeholder="Text" data-form-field="text5" class="form-control display-7" value="" id="text5-extForm17-4m">
                        </div>
                        <div data-for="text6" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="text6-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Address</label>
                            <input type="text" name="text6" placeholder="Text" data-form-field="text6" class="form-control display-7" value="" id="text6-extForm17-4m">
                        </div>
                        <div data-for="text1" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="text1-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Email / Page Name</label>
                            <input type="text" name="text1" placeholder="Text" data-form-field="text1" class="form-control display-7" value="" id="text1-extForm17-4m">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h5 class="mbr-fonts-style display-5">Food Safety Field of Interest</h5>
                        </div>
                        <div data-for="select2" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <select name="select2" data-form-field="select2" class="form-control display-7" id="select2-extForm17-4m">
<option value="Select">Select</option>
<option value="Second">Second</option>
<option value="Third">Third</option>
</select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="join" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="join-extForm17-4m" class="form-control-label mbr-fonts-style display-7">I prefer to join as </label>
                            <select name="join" data-form-field="join" class="form-control display-7" id="join-extForm17-4m">
<option value="Select">Select</option>
<option value="Second">Second</option>
<option value="Third">Third</option>
</select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="select" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="select-extForm17-4m" class="form-control-label mbr-fonts-style display-7">How did you know about us</label>
                            <select name="select" data-form-field="select" class="form-control display-7" id="select-extForm17-4m">
<option value="Select">Select</option>
<option value="Second">Second</option>
<option value="Third">Third</option>
</select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="text" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="text-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Other Memberships</label>
                            <input type="text" name="text" placeholder="Text" data-form-field="text" class="form-control display-7" value="" id="text-extForm17-4m">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="select1" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="select1-extForm17-4m" class="form-control-label mbr-fonts-style display-7">When is your sparetime </label>
                            <select name="select1" data-form-field="select1" class="form-control display-7" id="select1-extForm17-4m">
<option value="Select">Select</option>
<option value="Second">Second</option>
<option value="Third">Third</option>
</select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h5 class="mbr-fonts-style display-5">Contact Details</h5>
                        </div>
                        <div data-for="email" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="email-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="email" name="email" placeholder="test@email.com" data-form-field="email" class="form-control display-7" value="" id="email-extForm17-4m">
                        </div>
                        <div data-for="phone" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="phone-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Telephone*</label>
                            <input type="tel" name="phone" placeholder="Phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" data-form-field="phone" class="form-control display-7" value="" id="phone-extForm17-4m">
                        </div>
                        <div data-for="url" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="url-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Facebook</label>
                            <input type="url" name="url" placeholder="https://" pattern="https://.*" data-form-field="url" class="form-control display-7" value="" id="url-extForm17-4m">
                        </div>
                        <div data-for="url1" class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <label for="url1-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Twitter</label>
                            <input type="url" name="url1" placeholder="https://" pattern="https://.*" data-form-field="url1" class="form-control display-7" value="" id="url1-extForm17-4m">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="Third" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <div class="form-control-label">
                                <label for="Third-extForm17-4m" class="mbr-fonts-style display-7">Services you like to particibate </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" value="Yes" name="First" data-form-field="Third" class="form-check-input display-7" id="First-extForm17-4m">
                                <label class="form-check-label display-7">First</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" value="Yes" name="Second" data-form-field="Third" class="form-check-input display-7" id="Second-extForm17-4m">
                                <label class="form-check-label display-7">Second</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" value="Yes" name="Third" data-form-field="Third" class="form-check-input display-7" id="Third-extForm17-4m">
                                <label class="form-check-label display-7">Third</label>
                            </div>
                        </div>
                        <div data-for="text1" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="text1-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Any Other Comments</label>
                            <input type="text" name="text1" placeholder="Text" data-form-field="text1" class="form-control display-7" value="" id="text1-extForm17-4m">
                        </div>
                        <div data-for="I agree to all the " class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <div class="form-control-label">
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" value="Yes" name="I agree to all the " data-form-field="I agree to all terms" class="form-check-input display-7" id="I agree to all the -extForm17-4m">
                                <label class="form-check-label display-7">I agree to all the <strong><a href="popup:#mbr-popup-4t" data-toggle="modal" data-target="#mbr-popup-4t">Terms&nbsp;</a></strong></label>
                                <a> Terms</a>
                            </div>
                        </div>
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

<div class="modal mbr-popup cid-rRIAcvXqEV fade" tabindex="-1" role="dialog" data-overlay-color="#000000" data-overlay-opacity="0.8" id="mbr-popup-4t" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h5 class="modal-title mbr-fonts-style display-5">Popup Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="currentColor">
                    <path d="M31.797 0.191c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.598 0.581 0.342 1.543 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM14.472 17.515c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.613 0.595 0.34 1.562 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM1.144 0.205c-0.584-0.587-1.544 0.336-0.942 0.942l30.654 30.651c0.613 0.625 1.563-0.325 0.942-0.942z"></path>
                </svg>
            </button>
            </div>

            <div class="modal-body">
                <p class="mbr-text mbr-fonts-style display-7">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore incidunt molestias, vitae recusandae error ipsam
                </p>

                <div>




                </div>
            </div>


        </div>
    </div>
</div>


@endsection
