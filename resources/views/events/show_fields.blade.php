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

    <img src="{{ $media->getUrl() }}" class="table-image" width="200"  alt="" srcset="">

    @empty

    @endforelse
</p>
</div>
