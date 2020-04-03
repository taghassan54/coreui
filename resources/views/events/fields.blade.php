<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text', 'Text:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control summary','style' => 'height:300px']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
@if (isset($event))

{!! Form::date('date', $event->date, ['class' => 'form-control','id'=>'date']) !!}
@else
{!! Form::date('date', null, ['class' => 'form-control','id'=>'date']) !!}

@endif
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Image :') !!}
    {!! Form::file('file[]', ['class' => 'form-control','multiple'=>true]) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('events.index') }}" class="btn btn-secondary">Cancel</a>
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
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
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
