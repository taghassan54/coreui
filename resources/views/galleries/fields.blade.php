<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
{{--  @if (isset($gallery))

@if ($gallery->type=='img')
<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', ' files :') !!}
    {!! Form::file('file', ['class' => 'form-control']) !!}
</div>
@else
<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', ' youtube :') !!}
    {!! Form::text('youtube',null, ['class' => 'form-control' , 'placeholder'=>'example  https://www.youtube-nocookie.com/embed/Z0zNRfZZMow ']) !!}
</div>
@endif

@else  --}}
<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', ' files :') !!}
    {!! Form::file('file', ['class' => 'form-control']) !!}
</div>
<h5> or :</h5>
<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', ' youtube :') !!}
    {!! Form::text('youtube',null, ['class' => 'form-control' , 'placeholder'=>'example https://www.youtube.com/watch?v=Tfaq4UTH7P0&list=RDk2qgadSvNyU&index=3']) !!}
</div>
{{--  @endif  --}}


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('galleries.index') }}" class="btn btn-secondary">Cancel</a>
</div>
