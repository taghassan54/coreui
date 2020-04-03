<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $slider->title }}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Text:') !!}
    <p>{{ $slider->text }}</p>
</div>


<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $slider->type }}</p>
</div>


<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Images:') !!}

    <p>@forelse ($slider->getMedia() as $media)
    <img src="{{ $media->getUrl() }}" class="table-image" width="200" alt="" srcset="">
    <form action="/delete-media" method="post">
    @csrf
    <input type="hidden" name="model" value="Slider">
    <input type="hidden" name="model_id" value="{{ $slider->id }}">
    <input type="hidden" name="media_id" value="{{ $media->id }}">
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

    @empty

    @endforelse
</p>
</div>
