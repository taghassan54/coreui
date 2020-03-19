<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', 'Country Id:') !!}
    {!! Form::number('country_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Range Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_range_id', 'Age Range Id:') !!}
    {!! Form::number('age_range_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality_id', 'Nationality Id:') !!}
    {!! Form::number('nationality_id', null, ['class' => 'form-control']) !!}
</div>

<!-- City Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city_id', 'City Id:') !!}
    {!! Form::number('city_id', null, ['class' => 'form-control']) !!}
</div>

<!-- District Field -->
<div class="form-group col-sm-6">
    {!! Form::label('district', 'District:') !!}
    {!! Form::text('district', null, ['class' => 'form-control']) !!}
</div>

<!-- Block Field -->
<div class="form-group col-sm-6">
    {!! Form::label('block', 'Block:') !!}
    {!! Form::text('block', null, ['class' => 'form-control']) !!}
</div>

<!-- Graduation Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('graduation_date', 'Graduation Date:') !!}
    {!! Form::text('graduation_date', null, ['class' => 'form-control','id'=>'graduation_date']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#graduation_date').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Specialization Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('specialization_id', 'Specialization Id:') !!}
    {!! Form::number('specialization_id', null, ['class' => 'form-control']) !!}
</div>

<!-- University Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('university_id', 'University Id:') !!}
    {!! Form::number('university_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Comments Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comments', 'Comments:') !!}
    {!! Form::textarea('comments', null, ['class' => 'form-control']) !!}
</div>

<!-- Services You Like To Participate Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Services_you_like_to_participate', 'Services You Like To Participate:') !!}
    {!! Form::textarea('Services_you_like_to_participate', null, ['class' => 'form-control']) !!}
</div>

<!-- Other Memberships Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('other_memberships', 'Other Memberships:') !!}
    {!! Form::textarea('other_memberships', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('memberships.index') }}" class="btn btn-secondary">Cancel</a>
</div>
