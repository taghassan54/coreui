<div class="col-lg-12 col-md-12 col-sm-12">
    <h5 class="mbr-fonts-style display-5">Food Safety Field of Interest</h5>
</div>
<div data-for="select2" class="col-lg-12 col-md-12 col-sm-12 form-group">
    {!! Form::select('university_id', $FsooField->pluck('name','id'), null,
    ['class'=>'form-control display-7','id'=>'select-extForm17-4m']) !!}

</div>
<div class="col-lg-12 col-md-12 col-sm-12">
    <hr>
</div>

<div data-for="select" class="col-lg-12 col-md-12 col-sm-12 form-group">
    <label for="select-extForm17-4m"
        class="form-control-label mbr-fonts-style display-7">How did you know about
        us</label>
    <select name="select" data-form-field="select" class="form-control display-7"
        id="select-extForm17-4m">
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
    <input type="email" name="email" placeholder="test@email.com" data-form-field="email" class="form-control display-7"
        value="" id="email-extForm17-4m">
</div>
<div data-for="phone" class="col-lg-6 col-md-12 col-sm-12 form-group">
    <label for="phone-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Telephone*</label>
    <input type="tel" name="phone" placeholder="Phone" pattern="[0-9]{10}" data-form-field="phone"
        class="form-control display-7" value="" id="phone-extForm17-4m">
</div>
<div data-for="url" class="col-lg-6 col-md-12 col-sm-12 form-group">
    <label for="url-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Facebook</label>
    <input type="url" name="Facebook" placeholder="https://" pattern="https://.*" data-form-field="url"
        class="form-control display-7" value="" id="url-extForm17-4m">
</div>
<div data-for="url1" class="col-lg-6 col-md-12 col-sm-12 form-group">
    <label for="url1-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Twitter</label>
    <input type="url" name="Twitter" placeholder="https://" pattern="https://.*" data-form-field="url1"
        class="form-control display-7" value="" id="url1-extForm17-4m">
</div>
<div class="col-lg-12 col-md-12 col-sm-12">
    <hr>
</div>
<div data-for="Third" class="col-lg-12 col-md-12 col-sm-12 form-group">
    <div class="form-control-label">
        <label for="Third-extForm17-4m" class="mbr-fonts-style display-7">Services you like to particibate </label>
    </div>
    @foreach ($services as $item)
    <div class="form-check form-check-inline">
        <input type="checkbox" value="Yes" name="First" data-form-field="Third" class="form-check-input display-7"
            id="First-extForm17-4m">
        <label class="form-check-label display-7">{{ $item->name }}</label>
    </div>
    @endforeach

</div>

<div data-for="text1" class="col-lg-12 col-md-12 col-sm-12 form-group">
    <label for="text1-extForm17-4m" class="form-control-label mbr-fonts-style display-7">Any Other Comments</label>
    <input type="text" name="comments" placeholder="Text" data-form-field="text1" class="form-control display-7"
        value="" id="text1-extForm17-4m">
</div>
<div data-for="I agree to all the " class="col-lg-12 col-md-12 col-sm-12 form-group">
    <div class="form-control-label">
    </div>
    <div class="form-check form-check-inline">
        <input type="checkbox" value="Yes" name="I agree to all the " data-form-field="I agree to all terms"
            class="form-check-input display-7" id="I agree to all the -extForm17-4m">
        <label class="form-check-label display-7">I agree to all the <strong><a data-toggle="modal" href="/terms"
                    data-target="/terms" target="_blank">Terms&nbsp;</a></strong></label>
        <a> Terms</a>
    </div>
</div>
