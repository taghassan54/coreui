<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category :') !!}


    {!! Form::select('category_id', $categories->pluck('name','id'), null, ['class' => 'form-control']) !!}

</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>


<!-- Summary Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('summary', 'Summary:') !!}
    {!! Form::textarea('summary', null, ['class' => 'form-control summary','style' => 'height:300px']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control ','id'=>'editor']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Image :') !!}
    {!! Form::file('file[]', ['class' => 'form-control','multiple'=>true]) !!}
</div>


<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['draft'=>'draft','publish'=>'publish'],null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
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
