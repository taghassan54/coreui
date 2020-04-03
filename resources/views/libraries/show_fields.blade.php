<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $library->name }}</p>
</div>

<!-- Library Type Id Field -->
<div class="form-group">
    {!! Form::label('library_type_id', 'Library Type Id:') !!}
    <p>{{ $library->library_type_id }}</p>
</div>


<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Images:') !!}

    <p>@forelse ($library->getMedia() as $media)
    <img src="{{ $media->getUrl() }}" class="table-image" width="200" alt="" srcset="">
    <form action="/delete-media" method="post">
    @csrf
    <input type="hidden" name="model" value="Library">
    <input type="hidden" name="model_id" value="{{ $library->id }}">
    <input type="hidden" name="media_id" value="{{ $media->id }}">
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

    @empty

    @endforelse
</p>
</div>
