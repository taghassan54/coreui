<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $news->title }}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Text:') !!}
    <p>{!! $news->text !!}</p>
</div>


<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Images:') !!}

    <p>@forelse ($news->getMedia() as $media)
    <img src="{{ $media->getUrl() }}" class="table-image" width="200" alt="" srcset="">
    <form action="/delete-media" method="post">
    @csrf
    <input type="hidden" name="model" value="News">
    <input type="hidden" name="model_id" value="{{ $news->id }}">
    <input type="hidden" name="media_id" value="{{ $media->id }}">
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

    @empty

    @endforelse
</p>
</div>
