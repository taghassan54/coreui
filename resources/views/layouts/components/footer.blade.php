


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

    <section class="cid-rRfiDlx6et" id="footer2-8">





        <div class="container">
            <div class="media-container-row content mbr-white">
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <p class="mbr-text">

                        <strong>Address</strong>
                        <br>
                        <br>{{ $footer?$footer->address:'' }}

                        <br>
                        <br>
                        <br><strong>Contacts</strong>
                        <br>
                        <br>Email: {{ $footer?$footer->email:'' }}
                        <br>Phone: {{ $footer?$footer->phone:'' }}
                        <br>Fax: {{ $footer?$footer->fax:'' }}
                    </p>
                </div>
            {{--     <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <p class="mbr-text">
                        <strong>Links</strong>
                        <br>
                        <br>Privacy Policy<br>Terms of Use<br>Staff Links<br>
                        <br>&nbsp;<br>
                        <br>&nbsp;</p>
                </div> --}}
                <div class="col-12 col-md-6">

                    <div class="form-group">
                        <div id='map'></div>
                    </div>

                </div>
            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                <div class="media-container-row mbr-white">
                    <div class="col-sm-6 copyright">
                        <p class="mbr-text mbr-fonts-style display-7">Copyright © &nbsp;2020<br>Food Safety and Quality Organization , All rights reserved.<br>Designed &amp; Developed by Inspire Software</p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-list align-right">
                            <div class="soc-item">
                                <a href="https://twitter.com/mobirise" target="_blank">
                                    <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                    <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                    <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://instagram.com/mobirise" target="_blank">
                                    <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                    <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.behance.net/Mobirise" target="_blank">
                                    <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic3VzaGFtIiwiYSI6ImNqanAxMHkybDdiemIza3I1Zmp6cHNyZmEifQ.WjMlTsgbvIVtQdmY_AHF_g';

    @if (isset($footer))

    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10',
        center: [{{ $footer?$footer->lang:'' }},{{ $footer?$footer->lat:'' }}],
        zoom: 15
      });
      const marker = new mapboxgl.Marker();
      @if($footer->lang != 0 && $footer->lat !=0)
      marker.setLngLat([{{ $footer?$footer->lang:'' }},{{ $footer?$footer->lat:'' }}]).addTo(map);
      @endif

    @else

    @endif
        </script>
