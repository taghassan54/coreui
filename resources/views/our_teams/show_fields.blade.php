<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $ourTeam->name }}</p>
</div>

<!-- Position Field -->
<div class="form-group">
    {!! Form::label('position', 'Position:') !!}
    <p>{{ $ourTeam->position }}</p>
</div>

<!-- Aboute Field -->
<div class="form-group">
    {!! Form::label('aboute', 'Aboute:') !!}
    <p>{{ $ourTeam->aboute }}</p>
</div>


<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Images:') !!}

    <p>@forelse ($ourTeam->getMedia() as $media)
    <img src="{{ $media->getUrl() }}" class="table-image" width="200" alt="" srcset="">
    <form action="/delete-media" method="post">
    @csrf
    <input type="hidden" name="model" value="OurTeam">
    <input type="hidden" name="model_id" value="{{ $ourTeam->id }}">
    <input type="hidden" name="media_id" value="{{ $media->id }}">
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

    @empty

    @endforelse
</p>
</div>
