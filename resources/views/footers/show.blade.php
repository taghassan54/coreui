@extends('layouts.app')

@section('content')


<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
<style>
  body {
    margin: 0;
    padding: 0;
  }

  #map {
    /* {{--  position: absolute;  --}} */
    top: 0;
    bottom: 0;
    height: 500px;
    width: 100%;
  }
</style>

     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('footers.index') }}">Footer</a>
            </li>
            <li class="breadcrumb-item active">Detail</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Details</strong>
                                  <a href="{{ route('footers.index') }}" class="btn btn-light">Back</a>
                             </div>
                             <div class="card-body">
                                 @include('footers.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>



<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoic3VzaGFtIiwiYSI6ImNqanAxMHkybDdiemIza3I1Zmp6cHNyZmEifQ.WjMlTsgbvIVtQdmY_AHF_g';

@if (isset($footer))

var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/light-v10',
    center: [{{ $footer->lang }},{{ $footer->lat }}],
    zoom: 5
  });
  const marker = new mapboxgl.Marker();
  @if($footer->lang != 0 && $footer->lat !=0)
  marker.setLngLat([{{ $footer->lang }},{{ $footer->lat }}]).addTo(map);
  @endif

@else

@endif
    </script>
    @endsection
