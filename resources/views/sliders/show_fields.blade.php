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
<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Image:') !!}
    <p><img src="{{ $slider->getFirstMediaUrl() }}"  width="100%" alt="" srcset=""></p>
</div>


<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $slider->type }}</p>
</div>

