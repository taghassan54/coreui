<!-- Key Field -->
<div class="form-group col-sm-6">
    {!! Form::label('key', 'Key:') !!}
    {!! Form::text('key', null, ['class' => 'form-control','disabled']) !!}
</div>

<!-- Value Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::textarea('value', null, ['class' => 'form-control summary','style' => 'height:300px']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('settings.index') }}" class="btn btn-secondary">Cancel</a>
</div>

<script>
    ClassicEditor
        .create( document.querySelector( '.summary' ),{
            toolbar: [
                'heading',
                '|',
                'alignment',                                                 // <--- ADDED
                'bold',
                'italic',
                'link',
                'table',
                'bulletedList',
                'numberedList',
                'blockQuote',
                'undo',
                'redo',
            ],
        } )
        .catch( error => {
            console.error( error );
        } );

</script>

<style>
    .ck.ck-editor__editable_inline>:last-child{
        height: 100px;
    }
</style>
