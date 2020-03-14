<!-- Tag Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tag_id', 'Tag Id:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('tag_id', 0) !!}
        {!! Form::checkbox('tag_id', '1', null) !!}
    </label>
</div>


<!-- Post Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_id', 'Post Id:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('post_id', 0) !!}
        {!! Form::checkbox('post_id', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('blogPostTags.index') }}" class="btn btn-secondary">Cancel</a>
</div>
