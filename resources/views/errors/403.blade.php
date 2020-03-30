@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden') )
@section('action')
<a class="btn btn-info" href="{{ URL::previous() }}">back</a>

@endsection
