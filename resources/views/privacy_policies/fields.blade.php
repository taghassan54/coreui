<!-- Privacy Policy Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('privacy_policy', 'Privacy Policy:') !!}
    {!! Form::textarea('privacy_policy', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('privacyPolicies.index') }}" class="btn btn-secondary">Cancel</a>
</div>
