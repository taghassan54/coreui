<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $post->category_id }}</p>
</div>
<hr>
<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $post->title }}</p>
</div>


<hr>
<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $post->description }}</p>
</div>
<hr>
<!-- Summary Field -->
<div class="form-group">
    {!! Form::label('summary', 'Summary:') !!}
    <p>{!! $post->summary !!}</p>
</div>
<hr>
<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{!! $post->content !!}</p>
</div>
<hr>
<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Images:') !!}

    <p>@forelse ($post->getMedia() as $media)
    <img src="{{ $media->getUrl() }}" class="table-image" width="200" alt="" srcset="">
    <form action="/delete-media" method="post">
    @csrf
    <input type="hidden" name="model" value="Post">
    <input type="hidden" name="model_id" value="{{ $post->id }}">
    <input type="hidden" name="media_id" value="{{ $media->id }}">
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

    @empty

    @endforelse
</p>
</div>

<hr>
<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $post->show_status }}</p>
</div>



