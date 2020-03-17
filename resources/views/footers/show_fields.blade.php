<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $footer->address }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $footer->email }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $footer->phone }}</p>
</div>

<!-- Fax Field -->
<div class="form-group">
    {!! Form::label('fax', 'Fax:') !!}
    <p>{{ $footer->fax }}</p>
</div>

<div class="form-group">
    <div id='map'></div>
</div>

