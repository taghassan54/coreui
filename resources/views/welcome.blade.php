@extends('layouts.user')

@section('content')


@include('layouts.components.slider')
@include('flash::message')

@include('layouts.components.home_about')
@include('layouts.components.our_services')
@include('layouts.components.blogs')
@include('layouts.components.contact_us')


@include('layouts.components.slider2')



@endsection
