@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('blogPostTags.index') !!}">Blog Post Tag</a>
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
                              <strong>Edit Blog Post Tag</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($blogPostTag, ['route' => ['blogPostTags.update', $blogPostTag->id], 'method' => 'patch']) !!}

                              @include('blog_post_tags.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection