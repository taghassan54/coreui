<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text', 'Text:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Image :') !!}
    {!! Form::file('file', null, ['class' => 'form-control']) !!}
</div>


<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'bottom slider :') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('type', 0) !!}
        {!! Form::checkbox('type', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('sliders.index') }}" class="btn btn-secondary">Cancel</a>
</div>
