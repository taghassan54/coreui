,'enctype'=>"multipart/form-data"@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('ourTeams.index') !!}">Our Team</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Our Team</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($ourTeam, ['route' => ['ourTeams.update', $ourTeam->id], 'method' => 'patch','enctype'=>"multipart/form-data"]) !!}

                              @include('our_teams.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
