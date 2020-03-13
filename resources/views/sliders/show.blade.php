@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('sliders.index') }}">Slider</a>
            </li>
            <li class="breadcrumb-item active ">Detail</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Details</strong>
                                    <span></span>
                                  <a href="{{ route('sliders.index') }}" class="btn btn-light float-right" >Back</a>
                                  <!-- Type Field -->
                                    <div class="form-group text-center">
                                        {!! Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'delete']) !!}
                                        <div class='btn-group'>
                                            <a href="{{ route('sliders.edit', [$slider->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                             </div>
                             <div class="card-body">
                                 @include('sliders.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
