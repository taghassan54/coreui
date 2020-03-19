<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position', 'Position:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>

<!-- Aboute Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('aboute', 'Aboute:') !!}
    {!! Form::textarea('aboute', null, ['class' => 'form-control']) !!}
</div>
<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Image :') !!}
    {!! Form::file('file', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('partners.index') }}" class="btn btn-secondary">Cancel</a>
</div>
