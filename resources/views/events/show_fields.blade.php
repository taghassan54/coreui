<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $event->title }}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Text:') !!}
    <p>{{ $event->text }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $event->date }}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Images:') !!}

    <p>@forelse ($event->getMedia() as $media)
    <img src="{{ $media->getUrl() }}" class="table-image" width="200" alt="" srcset="">
    <form action="/delete-media" method="post">
    @csrf
    <input type="hidden" name="model" value="Event">
    <input type="hidden" name="model_id" value="{{ $event->id }}">
    <input type="hidden" name="media_id" value="{{ $media->id }}">
    <button type="submit" onclick="return  confirm('Want to delete ?!')" class="btn btn-danger">Delete</button>
</form>

    @empty

    @endforelse
</p>
</div>
