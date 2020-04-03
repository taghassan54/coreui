<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $gallery->title }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $gallery->type }}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Images:') !!}

    <p>@forelse ($gallery->getMedia() as $media)
    <img src="{{ $media->getUrl() }}" class="table-image" width="200" alt="" srcset="">
    <form action="/delete-media" method="post">
    @csrf
    <input type="hidden" name="model" value="Gallery">
    <input type="hidden" name="model_id" value="{{ $gallery->id }}">
    <input type="hidden" name="media_id" value="{{ $media->id }}">
    <button type="submit" onclick="return  confirm('Want to delete ?!')" class="btn btn-danger">Delete</button>
</form>

    @empty

    @endforelse
</p>
</div>
