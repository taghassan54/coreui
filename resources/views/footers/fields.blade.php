
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


<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Lang Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('lang', null, ['class' => 'form-control','id'=>'lang']) !!}
</div>

<!-- Lat Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('lat', null, ['class' => 'form-control','id'=>'lat']) !!}
</div>
<div class="form-group">
    <div id='map'></div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('footers.index') }}" class="btn btn-secondary">Cancel</a>
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
  map.on('click', function(e) {
      // console.log(e)
          $('#lang').val(e.lngLat.lng)
          $('#lat').val(e.lngLat.lat)
          marker.setLngLat([e.lngLat.lng,e.lngLat.lat]).addTo(map);
      });
@else

@endif
    </script>
