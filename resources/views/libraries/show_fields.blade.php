<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $library->name }}</p>
</div>

<!-- Library Type Id Field -->
<div class="form-group">
    {!! Form::label('library_type_id', 'Library Type Id:') !!}
    <p>{{ $library->library_type_id }}</p>
</div>

