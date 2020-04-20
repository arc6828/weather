@extends('layout.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @php
                //print_r($weather);
                //echo "<br>";
                
                //print_r($base_object);
                //echo "<br>";
                
                //print_r($small_object);
                //echo "<br>";
                
                //print_r($large_object);
                //echo "<br>";
                @endphp
                
                <h2>Weather : {{ $weather->report_generate }} </h2>
                <div class="card  d-none">
                    <div class="card-header">Weather : {{ $weather->report_generate }} </div>
                    <div class="card-body">
                        <a class="d-none" href="{{ url('/weather') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a class="d-none" href="{{ url('/weather/' . $weather->id . '/edit') }}" title="Edit Weather"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form class="d-none" method="POST" action="{{ url('weather' . '/' . $weather->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Weather" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>    
                
                    </div>
                </div>
                <div class="row mt-4">                       
                    <div class="col-md-12">
                        <div class="widget ">
                            <div class="widget-header"> 
                                <h3> Google Map (พื้นที่เสี่ยงน้ำท่วมจากระบบ)</h3>
                            </div>
                            <div class="widget-content">
                                <div id="map" style="height: 500px;"></div>
                                แถบสี
                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-NoP20OejFNd_gxMizvmRCDHwRPg0gJI" ></script>
                                <script>
                                    //google.maps.event.addDomListener(window, 'load', init);
                                    var map;
                                    var overlay;
                                    USGSOverlay.prototype = new google.maps.OverlayView();

                                    //var src = "https://weather.ckartisan.com/sample/kml/test1.kmz";
                                    var src = "{{ asset('/storage') }}/{{ $weather->kmls }} ";
                                    //var src = "https://weather.ckartisan.com/sample/kml/2D_Base.kmz";
                                    // /2D_Base.kmz
                                    //var src = "{{ url('/') }}/reports/2019-08-14_10-00-00/kml/1RG.kmz";
                                    //var src = "https://csincube.com/us_states.kml";
                                    //var src = 'https://developers.google.com/maps/documentation/javascript/examples/kml/westcampus.kml';


                                    function initMap() {
                                        var map = new google.maps.Map(document.getElementById('map'), {
                                        //center: {lat: 21.3143328800798, lng: 105.603779579014},
                                        center: {lat: 13.751288, lng: 100.628847},
                                        //13.751288, 100.628847
                                        zoom: 14
                                        });

                                        var kmlLayer = new google.maps.KmlLayer(src, {
                                        suppressInfoWindows: true,
                                        preserveViewport: true,
                                        map: map
                                        });
                                        console.log("kmlLayer : " , kmlLayer);

                                        //OVERLAY                                        

                                        var bounds = new google.maps.LatLngBounds(
                                            new google.maps.LatLng(12.75026910981639, 99.73642387358632),
                                            new google.maps.LatLng(14.91950740666351, 101.9563556674292));

                                            

                                        // The photograph is courtesy of the U.S. Geological Survey.                                       
                                        var srcImage = 'http://weather.bangkok.go.th/Images/Radar/NjKML/njRadarOnGoogle.png';

                                        // The custom USGSOverlay object contains the USGS image,
                                        // the bounds of the image, and a reference to the map.
                                        overlay = new USGSOverlay(bounds, srcImage, map);
                                        
                                    }

                                    function USGSOverlay(bounds, image, map) {
                                        // Initialize all properties.
                                        this.bounds_ = bounds;
                                        this.image_ = image;
                                        this.map_ = map;

                                        // Define a property to hold the image's div. We'll
                                        // actually create this div upon receipt of the onAdd()
                                        // method so we'll leave it null for now.
                                        this.div_ = null;

                                        // Explicitly call setMap on this overlay.
                                        this.setMap(map);
                                    }
                                    USGSOverlay.prototype.onAdd = function () {

                                        var div = document.createElement('div');
                                        div.style.borderStyle = 'none';
                                        div.style.borderWidth = '0px';
                                        div.style.position = 'absolute';

                                        // Create the img element and attach it to the div.
                                        var img = document.createElement('img');
                                        img.src = this.image_;
                                        img.style.width = '100%';
                                        img.style.height = '100%';
                                        //img.style.position = 'absolute';
                                        div.appendChild(img);

                                        this.div_ = div;

                                        // Add the element to the "overlayLayer" pane.
                                        var panes = this.getPanes();
                                        panes.overlayLayer.appendChild(div);
                                    };

                                    USGSOverlay.prototype.draw = function () {

                                        // We use the south-west and north-east
                                        // coordinates of the overlay to peg it to the correct position and size.
                                        // To do this, we need to retrieve the projection from the overlay.
                                        var overlayProjection = this.getProjection();

                                        // Retrieve the south-west and north-east coordinates of this overlay
                                        // in LatLngs and convert them to pixel coordinates.
                                        // We'll use these coordinates to resize the div.
                                        var sw = overlayProjection.fromLatLngToDivPixel(this.bounds_.getSouthWest());
                                        var ne = overlayProjection.fromLatLngToDivPixel(this.bounds_.getNorthEast());

                                        // Resize the image's div to fit the indicated dimensions.
                                        var div = this.div_;
                                        div.style.left = sw.x + 'px';
                                        div.style.top = ne.y + 'px';
                                        div.style.width = (ne.x - sw.x) + 'px';
                                        div.style.height = (sw.y - ne.y) + 'px';
                                    };

                                    // The onRemove() method will be called automatically from the API if
                                    // we ever set the overlay's map property to 'null'.
                                    USGSOverlay.prototype.onRemove = function () {
                                        this.div_.parentNode.removeChild(this.div_);
                                        this.div_ = null;
                                    };
                                    google.maps.event.addDomListener(window, 'load', initMap);
                                </script>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget">
                            <div class="widget-header"> 
                                <h3>RTF-Rainfall</h3>
                            </div>
                            <div class="widget-content image-container">
                                <img class="image" src="{{ url('storage') }}/{{ $weather->Outfalls }}" width="100%" >    
                                <div class="overlay">Now</div> 
                                <div class="overlay2">Forecast</div>               
                            </div>
                            <style>
                                                        
                            .image-container {
                                /*position: relative;
                                width: 50%;
                                max-width: 300px;*/
                            }

                            .image {
                                /*display: block;
                                width: 100%;
                                height: auto;*/
                            }

                            .overlay {
                                position: absolute; 
                                left: 0; 
                                bottom:0;
                                background: rgb(0, 0, 0);
                                background: rgba(0, 0, 0, 0.5); /* Black see-through */
                                color: #f1f1f1; 
                                height: 90%;
                                width : 50%;
                                transition: .5s ease;
                                opacity:0;
                                color: white;
                                font-size: 20px;
                                /*padding: 20px;*/
                                text-align: center;
                                padding-top: 150px;
                            }

                            .overlay2 {
                                position: absolute; 
                                right: 0; 
                                bottom:0;
                                background: rgb(0, 0, 0);
                                background: rgba(0, 0, 0, 0.5); /* Black see-through */
                                color: #f1f1f1; 
                                height: 90%;
                                width : 50%;
                                transition: .5s ease;
                                opacity:0;
                                color: white;
                                font-size: 20px;
                                /*padding: 20px;*/
                                text-align: center;
                                padding-top: 150px;
                            }

                            .image-container .overlay:hover, .image-container .overlay2:hover  {
                                opacity: 1.0;
                            }
                            </style>
                        </div>
                    </div>

            
                    <div class="col-md-6">
                        <div class="widget">
                            <div class="widget-header"> 
                                <h3> Radar</h3>
                            </div>

                            <div class="widget-content">
                                <img src="http://weather.bangkok.go.th/FTPCustomer/radar/pics/radar.gif" width="100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header"> 
                                <h3> ระดับน้ำในท่อระบายน้ำที่ตำแหน่งจุดอ่อนน้ำท่วมในพื้นที่</h3>
                            </div>

                            <div class="widget-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">แยกพัฒนาการ LH</a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">แยกพัฒนาการ RH</a>
                                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">แยกลำสาลี RL</a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">ซอยรามคำแหง 1-5</a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">หน้ามหาวิยาลัยรามคำแหง (ฝั่งมหาวิทยาลัย)</a>
                                        </div>
                                    </div>
                                                    
                                    <div class="col-md-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <img src="{{ url('storage') }}/{{ $weather->profiles }}" width="100%" />
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <img src="{{ url('storage') }}/{{ $weather->profiles2 }}" width="100%" />
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <img src="{{ url('storage') }}/{{ $weather->profiles3 }}" width="100%" />
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <img src="{{ url('storage') }}/{{ $weather->profiles4 }}" width="100%" />
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <img src="{{ url('storage') }}/{{ $weather->profiles5 }}" width="100%" />
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                                
                    </div>

                    

                    <div class="col-md-6" id="accordion8">
                        <div class="widget">
                            <div class="widget-header">
                                <a class="card-link" data-toggle="collapse" href="#collapset8">  
                                    <h3>Flow routing continuity</h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapset8" class="collapse show" data-parent="#accordion8">
                                    <table class="table table-sm">
                                        <tr><th> Dry weather inflow (MG) </th><td> {{ $weather->dryweaflow }} </td></tr>
                                        <tr><th> Wet weather inflow (MG) </th><td> {{ $weather->wetweaflow }} </td></tr>
                                        <tr><th> Groundwater inflow (MG) </th><td> {{ $weather->groundweaflow }} </td></tr>
                                        <tr><th> RDII inflow (MG) </th><td> {{ $weather->rdiiflow }} </td></tr>
                                        <tr><th> External inflow (MG) </th><td> {{ $weather->exnalflow }} </td></tr>
                                        <tr><th> External outflow (MG) </th><td> {{ $weather->exnaloutflow }} </td></tr>
                                        <tr><th> Flooding loss (MG) </th><td> {{ $weather->floodloss }} </td></tr>
                                        <tr><th> Evaporation loss (MG) </th><td> {{ $weather->evaloss }} </td></tr>
                                        <tr><th> Exfiltration loss (MG) </th><td> {{ $weather->exfiltionloss }} </td></tr>
                                        <tr><th> Initial stored volume (MG)</th><td> {{ $weather->lnitialvols }} </td></tr>
                                        <tr><th> Final stored volume (MG) </th><td> {{ $weather->finalvols }} </td></tr>
                                        <tr><th> Continuity error (%) </th><td> {{ $weather->conerrors }} </td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 " id="accordion12">
                        <div class="widget">
                            <div class="widget-header"> 
                                <a class="card-link" data-toggle="collapse" href="#collapset12">
                                    <h3>Runoff quantity continuity</h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapset12" class="collapse show" data-parent="#accordion12">
                                    <table class="table table-sm">
                                        <tr><th> Initial LID storage (in) </th><td> {{ $weather->lidstroage }} </td></tr>
                                        <tr><th> Initial snow cover (in) </th><td> {{ $weather->snowcover }} </td></tr>
                                        <tr><th> Total precipitation (in) </th><td> {{ $weather->totalin }} </td></tr>
                                        <tr><th> Outfall runon (in) </th><td> {{ $weather->runonin }} </td></tr>
                                        <tr><th> Evaporation loss (in) </th><td> {{ $weather->evalossin }} </td></tr>
                                        <tr><th> Infiltration loss (in) </th><td> {{ $weather->infitionloss }} </td></tr>
                                        <tr><th> Surface runoff (in) </th><td> {{ $weather->surfacein }} </td></tr>
                                        <tr><th> LID drainage (in) </th><td> {{ $weather->drainage }} </td></tr>
                                        <tr><th> Snow removed (in) </th><td> {{ $weather->snowved }} </td></tr>
                                        <tr><th> Final snow cover (in) </th><td> {{ $weather->finalsnow }} </td></tr>
                                        <tr><th> Final storage (in) </th><td> {{ $weather->finalin }} </td></tr>
                                        <tr><th> Continuity error (%) </th><td> {{ $weather->conerror }} </td></tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-md-6 " id="accordion3">
                        <div class="widget">
                            <div class="widget-header">
                                <a class="card-link" data-toggle="collapse" href="#collapset3"> 
                                    <h3>Results statistics</h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapset3" class="collapse show" data-parent="#accordion3">
                                    <table class="table table-sm">
                                        <tr><th> Max. subcatchment total runoff (MG) </th><td> {{ $weather->maxmg }} </td></tr>
                                        <tr><th> Max. subcatchment peak runoff (cfs) </th><td> {{ $weather->maxcfs }} </td></tr>
                                        <tr><th> Max. subcatchment runoff coefficient </th><td> {{ $weather->maxcoeffnt }} </td></tr>
                                        <tr><th> Max. subcatchment total precip (in) </th><td> {{ $weather->maxin }} </td></tr>
                                        <tr><th> Min. subcatchment total precip (in) </th><td> {{ $weather->minin }} </td></tr>
                                        <tr><th> Max. node depth (ft)	 </th><td> {{ $weather->mxnode }} </td></tr>
                                        <tr><th> Num. nodes surcharged  </th><td> {{ $weather->surcharged }} </td></tr>
                                        <tr><th> Max. node surcharge duration (hours) </th><td> {{ $weather->nodesurched }} </td></tr>
                                        <tr><th> Max. node height above crown (ft) </th><td> {{ $weather->maxcrown }} </td></tr>
                                        <tr><th> Min. node depth below rim (ft) </th><td> {{ $weather->minbelow }} </td></tr>
                                        <tr><th> Num. nodes flooded	 </th><td> {{ $weather->flooded }} </td></tr>
                                        <tr><th> Max. node flooding duration (hours) </th><td> {{ $weather->flooding }} </td></tr>
                                        <tr><th> Max. node flood volume (MG) </th><td> {{ $weather->floodmg }} </td></tr>
                                        <tr><th> Max. node ponded volume or depth  </th><td> {{ $weather->pondedvolume }} </td></tr>
                                        <tr><th> Max. storage volume (1000 ft?) </th><td> {{ $weather->maxvolume }} </td></tr>
                                        <tr><th> Max. storage percent full (%) </th><td> {{ $weather->maxperfull }} </td></tr>
                                        <tr><th> Max. outfall flow frequency (%) </th><td> {{ $weather->maxfrecy }} </td></tr>
                                        <tr><th> Max. outfall peak flow (cfs) </th><td> {{ $weather->maxflow }} </td></tr>
                                        <tr><th> Max. outfall total volume (MG)	</th><td> {{ $weather->maxoutfallmg }} </td></tr>
                                        <tr><th> Total outfall volume (MG)  </th><td> {{ $weather->totalmg }} </td></tr>
                                        <tr><th> Max. link peak flow (cfs) </th><td> {{ $weather->maxpeak }} </td></tr>
                                        <tr><th> Max. link peak velocity (ft/s)</th><td> {{ $weather->maxlinkty }} </td></tr>
                                        <tr><th> Min. link peak velocity (ft/s) </th><td> {{ $weather->minpeakty }} </td></tr>
                                        <tr><th> Num. conduits surcharged  </th><td> {{ $weather->conduits }} </td></tr>
                                        <tr><th> Max. conduit surcharge duration (hours) </th><td> {{ $weather->maxconduits }} </td></tr>
                                        <tr><th> Max. conduit capacity limited duration (hours) </th><td> {{ $weather->maxcapacity }} </td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-6" id="accordion9">
                        <div class="widget">
                            <div class="widget-header"> 
                                <a class="card-link" data-toggle="collapse" href="#collapset9">
                                    <h3>Inflows</h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapset9" class="collapse show" data-parent="#accordion9">
                                    <table class="table table-sm">
                                        <tr><th> Time series inflows </th><td> {{ $weather->timeflows }} </td></tr>
                                        <tr><th> Dry weather inflows </th><td> {{ $weather->dryweaflows }} </td></tr>
                                        <tr><th> Groundwater inflows </th><td> {{ $weather->groundflows }} </td></tr>
                                        <tr><th> RDII inflows </th><td> {{ $weather->rdiiflows }} </td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-none" id="accordion1">
                        <div class="widget">
                            <div class="widget-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    <h3>Model inventory</h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapseOne" class="collapse show" data-parent="#accordion1">
                                    <table class="table table-sm">
                                        <tr><th> Raingages </th><td> {{ isset($weather->raings) ? $weather->raings: ''}}</td></tr>
                                        <tr><th> Subcatchments </th><td> {{ isset($weather->inventory_subments) ? $weather->inventory_subments: ''}} </td></tr>
                                        <tr><th> Aquifers </th><td> {{ isset($weather->inventory_aquifers) ? $weather->inventory_aquifers: '' }} </td></tr>
                                        <tr><th> Snowpacks </th><td> {{ isset($weather->inventory_snows) ? $weather->inventory_snows: '' }} </td></tr>
                                        <tr><th> RDII hydrographs </th><td> {{ isset($weather->inventory_rdiigraphs) ? $weather->inventory_rdiigraphs : ''}} </td></tr>
                                        <tr><th> Junction nodes </th><td> {{ isset( $weather->inventory_jundes) ? $weather->inventory_jundes : ''}} </td></tr>
                                        <tr><th> Outfall nodes </th><td> {{ isset($weather->inventory_outdes) ? $weather->inventory_outdes : ''}} </td></tr>
                                        <tr><th> Flow divider nodes </th><td> {{ isset( $weather->inventory_fldides) ? $weather->inventory_fldides : ''}} </td></tr>
                                        <tr><th> Storage unit nodes </th><td> {{ isset($weather->inventory_storaundes) ? $weather->inventory_storaundes : ''}} </td></tr>
                                        <tr><th> Conduit links </th><td> {{ isset($weather->inventory_conlinks) ? $weather->inventory_conlinks : ''}} </td></tr>
                                        <tr><th> Pump links </th><td> {{ isset($weather->inventory_pumplinks) ? $weather->inventory_pumplinks : ''}} </td></tr>
                                        <tr><th> Orifice links </th><td> {{ isset($weather->inventory_oriflinks) ? $weather->inventory_oriflinks : ''}} </td></tr>
                                        <tr><th> Weir links	 </th><td> {{ isset($weather->inventory_snows) ? $weather->inventory_weirlinks : ''}} </td></tr>
                                        <tr><th> Outlet links </th><td> {{ isset( $weather->inventory_weirlinks ) ? $weather->inventory_outlinks : ''}} </td></tr>
                                        <tr><th> Treatment units </th><td> {{ isset( $weather->inventory_treunits) ? $weather->inventory_treunits : ''}} </td></tr>
                                        <tr><th> Transects	 </th><td> {{ isset($weather->inventory_transect) ? $weather->inventory_transect : ''}} </td></tr>
                                        <tr><th> Control rules </th><td> {{ isset($weather->inventory_conruls) ? $weather->inventory_conruls : ''}} </td></tr>
                                        <tr><th> Pollutants </th><td> {{ isset($weather->inventory_polluts) ? $weather->inventory_polluts : '' }} </td></tr>
                                        <tr><th> Land Uses </th><td> {{ isset($weather->inventory_landus) ? $weather->inventory_landus : ''}} </td></tr>
                                        <tr><th> Control Curves </th><td> {{ isset($weather->conves) ? $weather->conves : ''}} </td></tr>
                                        <tr><th> Diversion Curves </th><td> {{ isset($weather->divsionves) ? $weather->divsionves : ''}} </td></tr>
                                        <tr><th> Pump Curves </th><td> {{ isset ($weather->pumpves) ? $weather->pumpves : ''}} </td></tr>
                                        <tr><th> Rating Curves </th><td> {{ isset($weather->ratingves) ? $weather->ratingves : ''}} </td></tr>
                                        <tr><th> Shape Curves </th><td> {{ isset($weather->shapeves ) ? $weather->shapeves : ''}} </td></tr>
                                        <tr><th> Storage Curves </th><td> {{ isset( $weather->strogves ) ? $weather->strogves : ''}} </td></tr>
                                        <tr><th> Tidal Curves </th><td> {{ isset($weather->tidalves) ? $weather->tidalves : ''}} </td></tr>
                                        <tr><th> Weir Curves </th><td> {{ isset($weather->weirves ) ? $weather->weirves : ''}} </td></tr>
                                        <tr><th> Time Series </th><td> {{ isset($weather->timeseries) ? $weather->timeseries : ''}} </td></tr>
                                        <tr><th> Time Patterns </th><td> {{ isset($weather->timepatns) ? $weather->timepatns : ''}} </td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                

                    <div class="col-md-6 d-none" id="accordion2">
                        <div class="widget">
                            <div class="widget-header"> 
                                <a class="card-link" data-toggle="collapse" href="#collapsetwo">
                                    <h3>Options</h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapsetwo" class="collapse show" data-parent="#accordion2">
                                    <table class="table table-sm">
                                        <tr><th> Flow Units	 </th><td> {{ $weather->flowunits }} </td></tr>
                                        <tr><th> Infiltration method </th><td> {{ $weather->inftionmet }} </td></tr>
                                        <tr><th> Flow routing method </th><td> {{ $weather->flowtingmet }} </td></tr>
                                        <tr><th> Link offsets defined </th><td> {{ $weather->linkoffsetsned }} </td></tr>
                                        <tr><th> Allow ponding </th><td> {{ $weather->allowding }} </td></tr>
                                        <tr><th> Skip steady flow periods </th><td> {{ $weather->skipflowds }} </td></tr>
                                        <tr><th> Inertial dampening </th><td> {{ $weather->inertialing }} </td></tr>
                                        <tr><th> Define supercritical flow  </th><td> {{ $weather->defineflow }} </td></tr>
                                        <tr><th> Force Main Equation </th><td> {{ $weather->forcetion }} </td></tr>
                                        <tr><th> Variable time step </th><td> {{ $weather->variable }} </td></tr>
                                        <tr><th> Adjustment factor (%) </th><td> {{ $weather->adjustment }} </td></tr>
                                        <tr><th> Conduit lengthening (s)  </th><td> {{ $weather->conduit }} </td></tr>
                                        <tr><th> Minimum surface area (ft?) </th><td> {{ $weather->surface }} </td></tr>
                                        <tr><th> Starting date </th><td> {{ $weather->startingdate }} </td></tr>
                                        <tr><th> Ending date </th><td> {{ $weather->endingdate }} </td></tr>
                                        <tr><th> Duration of simulation (hours)</th><td> {{ $weather->duration }} </td></tr>
                                        <tr><th> Antecedent dry days (days) </th><td> {{ $weather->antecedent }} </td></tr>
                                        <tr><th> Rain interval (h:mm) </th><td> {{ $weather->rain }} </td></tr>
                                        <tr><th> Report time step (h:mm:ss) </th><td> {{ $weather->reporttime }} </td></tr>
                                        <tr><th> Wet time step (h:mm:ss) </th><td> {{ $weather->wettime }} </td></tr>
                                        <tr><th> Dry time step (h:mm:ss) </th><td> {{ $weather->drytime }} </td></tr>
                                        <tr><th> Routing time step (s) </th><td> {{ $weather->routingtime }} </td></tr>
                                        <tr><th> Minimum time step used (s) </th><td> {{ $weather->minimumtime }} </td></tr>
                                        <tr><th> Average time step used (s) </th><td> {{ $weather->avgtime }} </td></tr>
                                        <tr><th> Minimum conduit slope </th><td> {{ $weather->minimumcons }} </td></tr>
                                        <tr><th> Ignore rainfall/runoff </th><td> {{ $weather->lgnoreofs }} </td></tr>
                                        <tr><th> Ignore snow melt </th><td> {{ $weather->lgnoremelt }} </td></tr>
                                        <tr><th> Ignore groundwater </th><td> {{ $weather->lgnoreter }} </td></tr>
                                        <tr><th> Ignore flow routing </th><td> {{ $weather->lgnoreing }} </td></tr>
                                        <tr><th> Ignore water quality </th><td> {{ $weather->lgnorety }} </td></tr>
                                        <tr><th> Report average results </th><td> {{ $weather->reportavgs }} </td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-md-6 d-none" id="accordion4">
                        <div class="widget">
                            <div class="widget-header"> 
                                <a class="card-link" data-toggle="collapse" href="#collapset4"> 
                                    <h3> Subcatchment statistics </h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapset4" class="collapse show" data-parent="#accordion4">
                                    <table class="table table-sm">
                                        <tr><th> Max. width (ft) </th><td> {{ $weather->maxwidth }} </td></tr>
                                        <tr><th> Min. width (ft) </th><td> {{ $weather->minwidth }} </td></tr>
                                        <tr><th> Max. area (ac) </th><td> {{ $weather->maxarea }} </td></tr>
                                        <tr><th> Min. area (ac) </th><td> {{ $weather->minarea }} </td></tr>
                                        <tr><th> Total area (ac) </th><td> {{ $weather->totalarea }} </td></tr>
                                        <tr><th> Max. length of overland flow (ft) </th><td> {{ $weather->results_maxflow }} </td></tr>
                                        <tr><th> Min. length of overland flow (ft) </th><td> {{ $weather->minflow }}</td></tr>
                                        <tr><th> Max. slope (%)	 </th><td> {{ $weather->maxslope }} </td></tr>
                                        <tr><th> Min. slope (%) </th><td> {{ $weather->minslope }} </td></tr>
                                        <tr><th> Max. imperviousness (%) </th><td> {{ $weather->subcat_maximpness }} </td></tr>
                                        <tr><th> Min. imperviousness (%) </th><td> {{ $weather->subcat_minimpness }} </td></tr>
                                        <tr><th> Max. imp. roughness </th><td> {{ $weather->maximpness }} </td></tr>
                                        <tr><th> Min. imp. roughness </th><td> {{ $weather->minimpness }} </td></tr>
                                        <tr><th> Max. perv. roughness </th><td> {{ $weather->subcat_maxperv }} </td></tr>
                                        <tr><th> Min. perv. roughness </th><td> {{ $weather->subcat_minperv }} </td></tr>
                                        <tr><th> Max. imp. depression storage (in) </th><td> {{ $weather->maximp }} </td></tr>
                                        <tr><th> Min. imp. depression storage (in)</th><td> {{ $weather->minimp }} </td></tr>
                                        <tr><th> Max. perv. depression storage (in) </th><td> {{ $weather->maxperv }} </td></tr>
                                        <tr><th> Min. perv. depression storage (in) </th><td> {{ $weather->minperv }} </td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 d-none" id="accordion5">
                        <div class="widget">
                            <div class="widget-header"> 
                                <a class="card-link" data-toggle="collapse" href="#collapset5">
                                    <h3>Model complexity</h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapset5" class="collapse show" data-parent="#accordion5">
                                    <table class="table table-sm">
                                        <tr><th> Subcatchments </th><td> {{ $weather->subments }} </td></tr>
                                        <tr><th> Groundwater </th><td> {{ $weather->grounwter }} </td></tr>
                                        <tr><th> Aquifers </th><td> {{ $weather->complexity_aquifers }} </td></tr>
                                        <tr><th> Snowpacks	 </th><td> {{ $weather->complexity_snows }} </td></tr>
                                        <tr><th> RDII hydrographs </th><td> {{ $weather->complexity_rdiigraphs }} </td></tr>
                                        <tr><th> Junction nodes </th><td> {{ $weather->complexity_jundes }} </td></tr>
                                        <tr><th> Outfall nodes </th><td> {{ $weather->complexity_outdes }} </td></tr>
                                        <tr><th> Flow divider nodes </th><td> {{ $weather->complexity_fldides }} </td></tr>
                                        <tr><th> Storage unit nodes </th><td> {{ $weather->complexity_storaundes }} </td></tr>
                                        <tr><th> Conduit links </th><td> {{ $weather->complexity_conlinks }} </td></tr>
                                        <tr><th> Pump links </th><td> {{ $weather->complexity_pumplinks }} </td></tr>
                                        <tr><th> Orifice links </th><td> {{ $weather->complexity_oriflinks }} </td></tr>
                                        <tr><th> Weir links </th><td> {{ $weather->complexity_weirlinks }} </td></tr>
                                        <tr><th> Outlet links	 </th><td> {{ $weather->complexity_outlinks }} </td></tr>
                                        <tr><th> Transect </th><td> {{ $weather->complexity_transect }} </td></tr>
                                        <tr><th> Pollutants </th><td> {{ $weather->complexity_polluts }} </td></tr>
                                        <tr><th> Land Uses </th><td> {{ $weather->complexity_landus }} </td></tr>
                                        <tr><th> Model complexity (total uncertain input parameters) </th><td> {{ $weather->totalcomity }} </td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="col-md-6 d-none" id="accordion6">
                        <div class="widget">
                            <div class="widget-header">
                                <a class="card-link" data-toggle="collapse" href="#collapset6"> 
                                    <h3> Unused objects </h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapset6" class="collapse show" data-parent="#accordion6">
                                    <table class="table table-sm">
                                        <tr><th> Rain Gages </th><td> {{ $weather->gages }} </td></tr>
                                        <tr><th> Aquifers </th><td> {{ $weather->aquifers }} </td></tr>
                                        <tr><th> Snow Packs </th><td> {{ $weather->snowpacks }} </td></tr>
                                        <tr><th> Unit Hydrographs </th><td> {{ $weather->unitgraphs }} </td></tr>
                                        <tr><th> Transects </th><td> {{ $weather->transects }} </td></tr>
                                        <tr><th> Control Curves </th><td> {{ $weather->curves }} </td></tr>
                                        <tr><th> Diversion Curves </th><td> {{ $weather->diverves }} </td></tr>
                                        <tr><th> Pump Curves </th><td> {{ $weather->unused_pumpves }} </td></tr>
                                        <tr><th> Rating Curves </th><td> {{ $weather->unused_ratingves }} </td></tr>
                                        <tr><th> Shape Curves </th><td> {{ $weather->unused_shapeves }} </td></tr>
                                        <tr><th> Storage Curves </th><td> {{ $weather->storageves }} </td></tr>
                                        <tr><th> Tidal Curves </th><td> {{ $weather->unused_tidalves }} </td></tr>
                                        <tr><th> Weir Curves </th><td> {{ $weather->unused_weirves }} </td></tr>
                                        <tr><th> Time Series </th><td> {{ $weather->unused_timeseries }} </td></tr>
                                        <tr><th> Time Patterns </th><td> {{ $weather->timepatts }} </td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6 d-none" id="accordion7">
                        <div class="widget">
                            <div class="widget-header">
                                <a class="card-link" data-toggle="collapse" href="#collapset7"> 
                                    <h3>Summary/Conduit statistics.txt</h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapset7" class="collapse show" data-parent="#accordion7">
                                    <table class="table table-sm">
                                        <tr><th> Max. roughness </th><td> {{ $weather->mxrougs }} </td></tr>
                                        <tr><th> Min. roughness </th><td> {{ $weather->mnrougs }} </td></tr>
                                        <tr><th> Max. entry loss coef. </th><td> {{ $weather->mxenlefs }} </td></tr>
                                        <tr><th> Min. entry loss coef. </th><td> {{ $weather->mienlefs }} </td></tr>
                                        <tr><th> Max. exit loss coef. </th><td> {{ $weather->mxeloefs }} </td></tr>
                                        <tr><th> Min. exit loss coef. </th><td> {{ $weather->mneloefs }} </td></tr>
                                        <tr><th> Max. avg. loss coef. </th><td> {{ $weather->mxaglefs }} </td></tr>
                                        <tr><th> Min. avg. loss coef. </th><td> {{ $weather->miaglefs }} </td></tr>
                                        <tr><th> Max. length (ft) </th><td> {{ $weather->mxleths }} </td></tr>
                                        <tr><th> Min. length (ft) </th><td> {{ $weather->mileths }} </td></tr>
                                        <tr><th> Total length (ft) </th><td> {{ $weather->totallgth }} </td></tr>
                                        <tr><th> Max. slope (ft/ft)</th><td> {{ $weather->mxslope }} </td></tr>
                                        <tr><th> Min. slope (ft/ft) </th><td> {{ $weather->mislope }} </td></tr>        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-md-6 d-none" id="accordion10">
                        <div class="widget">
                            <div class="widget-header"> 
                                <a class="card-link" data-toggle="collapse" href="#collapset10">
                                    <h3>Pipe inventory</h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapset10" class="collapse show" data-parent="#accordion10">
                                    <table class="table table-sm">
                                        <tr><th> Max. pipe diameter (ft) </th><td> {{ $weather->mxpipeter }} </td></tr>
                                        <tr><th> Min. pipe diameter (ft)	 </th><td> {{ $weather->mnpipditer }} </td></tr>
                                        <tr><th> Total 12” pipe length (ft) </th><td> {{ $weather->totalpipeth }} </td></tr>
                                        <tr><th> Total other pipe length (ft) </th><td> {{ $weather->totalotherth }} </td></tr>
                                        <tr><th> Total pipe length (ft) </th><td> {{ $weather->totalpipth }} </td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-none" id="accordion11">
                        <div class="widget">
                            <div class="widget-header"> 
                                <a class="card-link" data-toggle="collapse" href="#collapset11">
                                    <h3>Node statistics</h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapset11" class="collapse show" data-parent="#accordion11">
                                    <table class="table table-sm">
                                        <tr><th> Max. ground elev. (ft) </th><td> {{ $weather->mxgroudev }} </td></tr>
                                        <tr><th> Min. ground elev. (ft) </th><td> {{ $weather->mngroudev }} </td></tr>
                                        <tr><th> Max. invert elev. (ft)	 </th><td> {{ $weather->mxvertev }} </td></tr>
                                        <tr><th> Min. invert elev. (ft) </th><td> {{ $weather->mnvertev }} </td></tr>
                                        <tr><th> Max. depth (ft) </th><td> {{ $weather->mxdepth }} </td></tr>
                                        <tr><th> Min. depth (ft) </th><td> {{ $weather->midepth }} </td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-md-6 d-none" id="accordion13">
                        <div class="widget">
                            <div class="widget-header"> 
                                <a class="card-link" data-toggle="collapse" href="#collapset13">
                                    <h3>Summary/Conduit Inventory.txt</h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapset13" class="collapse show" data-parent="#accordion13">
                                    <table class="table table-sm">
                                        <tr><th> Circular (ft) </th><td> {{ $weather->circular }} </td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-12 d-none" id="accordion14">
                        <div class="widget ">
                            <div class="widget-header"> 
                                <a class="card-link" data-toggle="collapse" href="#collapset14">
                                    <h3> Junction Flood </h3>
                                </a>
                            </div>
                            <div class="widget-content">
                                <div id="collapset14" class="collapse show" data-parent="#accordion14">
                                    <table class="table table-sm">
                                        <tr>
                                            <th>Name</th>
                                            <th>Invert Elev. (ft)</th>                                        
                                            <th>Rim Elev. (ft) </th>
                                            <th>Total Flood Vol. (MG)</th>
                                        </tr>
                                        <tr>
                                            <td>J1</td> <td>{{ $weather->invertevsJ1 }} </td> <td> {{ $weather->rimJ1 }} </td> <td> {{ $weather->totalmgJ1 }} </td>
                                            <tr><td>J2</td> <td> {{ $weather->invertevsJ2 }} </td> <td> {{ $weather->rimJ2 }} </td> <td> {{ $weather->totalmgJ2 }} </td></tr>
                                            <tr><td>J3</td> <td> {{ $weather->invertevsJ3 }} </td> <td> {{ $weather->rimJ3 }} </td> <td> {{ $weather->totalmgJ3 }} </td></tr>
                                            <tr><td>J4</td> <td> {{ $weather->invertevsJ4 }} </td> <td> {{ $weather->rimJ4 }} </td> <td> {{ $weather->totalmgJ4 }} </td></tr>
                                            <tr><td>J3_1</td> <td> {{ $weather->invertevsJ3_1 }}</td> <td> {{ $weather->rimJ3_1 }} </td> <td> {{ $weather->totalmgJ3_1 }} </td>
                                            <tr><td>J3_2</td>  <td> {{ $weather->invertevsJ3_2 }} </td> <td> {{ $weather->rimJ3_2 }} </td> <td> {{ $weather->totalmgJ3_2 }} </td>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>

@endsection
