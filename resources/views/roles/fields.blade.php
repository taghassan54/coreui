<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>


<h5>Permissions : </h5>
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::checkbox('', null, null,['id'=>'select-all']) !!}
        {!! Form::label('Permissions', 'select all' ) !!}
    </div>

    <!-- Guard Name Field -->
    @foreach ($Permissions as $Permission)
    <div class="form-group col-sm-6">

        @isset($role)
        {!! Form::checkbox('Permissions[]', $Permission->name, $role->hasPermissionTo($Permission->name)?true:'') !!}
            @else
        {!! Form::checkbox('Permissions[]', $Permission->name,false) !!}
        @endisset
        {!! Form::label('Permissions', $Permission->name ) !!}
    </div>
    @endforeach
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancel</a>
</div>

@section('scripts')

<script>
    // Listen for click on toggle checkbox
$('#select-all').click(function(event) {
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;
        });
    }
});
</script>
@endsection
