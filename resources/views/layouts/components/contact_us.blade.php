
<section class="mbr-section extForm cid-rRqSZo7FUh" id="extForm2-u">




    <div class="container">
        <div class="media-container-row">
            <div class="col-md-6 col-lg-6 block-content">
                <div class="form-block">
                    <div class="bg"></div>
                    <div class="form-wrap" data-form-type="formoid">
                        <!---Formbuilder Form--->
                        <form action="{{ Route('contactuses.store') }}" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                                @csrf
                            <div class="form-row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"></div>
                            </div>
                            <div class="dragArea form-row">
                                <div class="col-md-12">
                                    {{-- <h4 class="mbr-fonts-style mb-4 mbr-fonts-style display-5">Ready to get started?</h4> --}}
                                </div>
                                <div class="col-md-12 form-group " data-for="name">
                                    <input type="text" name="name" placeholder="Your Name" data-form-field="Name" required="required" class="form-control input display-7" id="name-extForm2-u">
                                </div>
                                <div data-for="email" class="col-md-12 form-group ">
                                    <input type="text" name="email" placeholder="Email" data-form-field="Email" class="form-control input display-7" required="required" id="email-extForm2-u">
                                </div>
                                <div class="col-md-12 form-group " data-for="message">
                                    <textarea type="textarea" name="message" placeholder="Message" data-form-field="Message" class="form-control input display-7" id="message-extForm2-u"></textarea>
                                </div>
                                <div class="col-md-12 input-group-btn mt-2">
                                    <button type="submit" class="btn btn-primary btn-form btn-bgr display-4">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>
                        <!---Formbuilder Form--->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="text-block">

                    {!! $settings->where('key','Contact Us Box')->first()?$settings->where('key','Contact Us Box')->first()->value:'' !!}
                </div>
                <p class="mb-4 mbr-fonts-style subtext display-7 pt-5">*We dont share your personal info with anyone. Check out our privacy policy for more information.</p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="mbr-section extForm cid-rRqSZo7FUh mbr-parallax-background" id="extForm2-u">



    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container">
        <div class="media-container-row">
            <div class="col-md-6 col-lg-6 block-content">
                <div class="form-block">
                    <div class="bg"></div>
                    <div class="form-wrap" data-form-type="formoid">

                        <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="V79rJZf02b1fMuDxZyaUKPkfOdwkyVq9K21lKCCCdalpa4JEDJR1sMpP3TgGavf6n9+SYij/u3FGebjgiTbuvNHvEwQiv15JdRvY/NONVQGbqcVkDLZ4SrhycGAliK+m.a6OIBrOmApUjTrf+l9oMgfMrPfADxZhfySfleUlemXV5NwhxoXuI0LfIhwXugkQM8GmxqZNWdVg4GYtDDEu5VkRkjYQZI/M0/mV1eAwDssLxs108rFCKWZhFuY9rxDtN">
                            <div class="form-row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"></div>
                            </div>
                            <div class="dragArea form-row">
                                <div class="col-md-12">
                                    <h4 class="mbr-fonts-style mb-4 mbr-fonts-style display-5">Ready to get started?</h4>
                                </div>
                                <div class="col-md-12 form-group " data-for="name">
                                    <input type="text" name="name" placeholder="Your Name" data-form-field="Name" required="required" class="form-control input display-7" id="name-extForm2-u">
                                </div>
                                <div data-for="email" class="col-md-12 form-group ">
                                    <input type="text" name="email" placeholder="Email" data-form-field="Email" class="form-control input display-7" required="required" id="email-extForm2-u">
                                </div>
                                <div class="col-md-12 form-group " data-for="message">
                                    <textarea type="textarea" name="message" placeholder="Message" data-form-field="Message" class="form-control input display-7" id="message-extForm2-u"></textarea>
                                </div>
                                <div class="col-md-12 input-group-btn mt-2">
                                    <button type="submit" class="btn btn-primary btn-form btn-bgr display-4">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="text-block">
                    Contact Us Box

                    <h2 class="mb-4 mbr-fonts-style mbr-section-title display-2">Let’s Get <strong>in Touch</strong></h2>
                    <h3 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">
                        Whatever types of questions you ll have, feel free to get in touch with us!
                    </h3>

                    <div class="mbr-section-btn mb-5">
                        <a class="btn btn-md btn-white-outline btn-bgr display-4" href="#">MORE</a>
                    </div>
                </div>
                <p class="mb-4 mbr-fonts-style subtext display-7 pt-5">*We dont share your personal info with anyone. Check out our privacy policy for more information.</p>
            </div>
        </div>
    </div>
</section> -->
