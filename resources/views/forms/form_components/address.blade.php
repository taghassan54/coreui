<div class="col-lg-12 col-md-12 col-sm-12">
    <h5 class="mbr-fonts-style display-5">Address</h5>
</div>
<div data-for="text" class="col-lg-12 col-md-12 col-sm-12 form-group">
    <input type="text" name="address" placeholder="address" data-form-field="text"
        class="form-control display-7" value="" id="text-extForm17-4m">
</div>
<div data-for="select3" class="col-lg-6 col-md-12 col-sm-12 form-group">
    <label for="select3-extForm17-4m"
        class="form-control-label mbr-fonts-style display-7">Country</label>
    {!! Form::select('country_id', $countries->pluck('name','id'), null,
    ['class'=>'form-control display-7','id'=>'select-extForm17-4m']) !!}

</div>
<div data-for="select4" class="col-lg-6 col-md-12 col-sm-12 form-group">
    <label for="select4-extForm17-4m"
        class="form-control-label mbr-fonts-style display-7">City</label>
    <input name="city_id" data-form-field="select3" class="form-control display-7"
        id="select4-extForm17-4m">
</div>
<div data-for="Title" class="col-lg-6 form-group">
    <input type="text" name="district" placeholder="District" data-form-field="Title"
        required="required" class="form-control display-7" value="" id="Title-extForm17-4m">
</div>
<div data-for="text7" class="col-lg-6 col-md-12 col-sm-12 form-group">
    <input type="text" name="block" placeholder="Neighbourhood / block"
        data-form-field="text4" class="form-control display-7" value=""
        id="text7-extForm17-4m">
</div>
