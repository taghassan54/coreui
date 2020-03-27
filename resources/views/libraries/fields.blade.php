<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Library Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('library_type_id', 'Library Type Id:') !!}
    {!! Form::select('library_type_id', $library_types->pluck('name','id'),null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Image :') !!}
    {!! Form::file('file', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('libraries.index') }}" class="btn btn-secondary">Cancel</a>
</div>
