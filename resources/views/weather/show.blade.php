@extends('layout.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Weather {{ $weather->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/weather') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/weather/' . $weather->id . '/edit') }}" title="Edit Weather"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('weather' . '/' . $weather->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Weather" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>
                        
                        <div class="row">                       
                            <div class="col-md-12">
                                <div class="widget ">
                                    <div class="widget-header"> 
                                        <h3> Google Map</h3>
                                    </div>
                                    <div class="widget-content">
                                        <div id="map" style="height: 300px;"></div>
                                        <script>
                                            var map;

                                            //var src = "https://weather.ckartisan.com/sample/kml/test1.kmz";
                                            var src = "{{ asset('/storage') }}/{{ $weather->kmls }} ";
                                            //var src = "https://weather.ckartisan.com/sample/kml/2D_Base.kmz";
                                            // /2D_Base.kmz
                                            //var src = "{{ url('/') }}/reports/2019-08-14_10-00-00/kml/1RG.kmz";
                                            //var src = "https://csincube.com/us_states.kml";
                                            //var src = 'https://developers.google.com/maps/documentation/javascript/examples/kml/westcampus.kml';


                                            function initMap() {
                                                map = new google.maps.Map(document.getElementById('map'), {
                                                //center: {lat: 21.3143328800798, lng: 105.603779579014},
                                                center: {lat: 13.751288, lng: 100.628847},
                                                //13.751288, 100.628847
                                                zoom: 15
                                                });

                                                var kmlLayer = new google.maps.KmlLayer(src, {
                                                suppressInfoWindows: true,
                                                preserveViewport: false,
                                                map: map
                                                });
                                                console.log("kmlLayer : " , kmlLayer);
                                            }
                                        </script>
                                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-NoP20OejFNd_gxMizvmRCDHwRPg0gJI&callback=initMap"
                                        async defer></script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3>Graph</h3>
                                    </div>
                                    <div class="widget-content">
                                        <img src="{{ url('storage') }}/{{ $weather->Outfalls }}" width="100%" />                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3>Profile</h3>
                                    </div>
                                    <div class="widget-content">                                       
                                        <img src="{{ url('storage') }}/{{ $weather->profiles }}" width="100%" />                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3> Radar</h3>
                                    </div>

                                    <div class="widget-content">
                                        <img src="http://weather.bangkok.go.th/FTPCustomer/radar/pics/nkradar.gif" width="100%">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                    <a href="#demo"  data-toggle="collapse">
                                        <h3>Model inventory</h3>
                                    </a>
                                    </div>
                                    <div class="widget-content">
                                        <div id="demo" class="collapse">
                                            <table class="table table-sm">
                                                <tr><th> Raingages </th><td> {{ $weather->raings }} </td></tr>
                                                <tr><th> Subcatchments </th><td> {{ $weather->inventory_subments }} </td></tr>
                                                <tr><th> Aquifers </th><td> {{ $weather->inventory_aquifers }} </td></tr>
                                                <tr><th> Snowpacks </th><td> {{ $weather->inventory_snows }} </td></tr>
                                                <tr><th> RDII hydrographs </th><td> {{ $weather->inventory_rdiigraphs }} </td></tr>
                                                <tr><th> Junction nodes </th><td> {{ $weather->inventory_jundes }} </td></tr>
                                                <tr><th> Outfall nodes </th><td> {{ $weather->inventory_outdes }} </td></tr>
                                                <tr><th> Flow divider nodes </th><td> {{ $weather->inventory_fldides }} </td></tr>
                                                <tr><th> Storage unit nodes </th><td> {{ $weather->inventory_storaundes }} </td></tr>
                                                <tr><th> Conduit links </th><td> {{ $weather->inventory_conlinks }} </td></tr>
                                                <tr><th> Pump links </th><td> {{ $weather->inventory_pumplinks }} </td></tr>
                                                <tr><th> Orifice links </th><td> {{ $weather->inventory_oriflinks }} </td></tr>
                                                <tr><th> Weir links	 </th><td> {{ $weather->inventory_weirlinks }} </td></tr>
                                                <tr><th> Outlet links </th><td> {{ $weather->inventory_outlinks }} </td></tr>
                                                <tr><th> Treatment units </th><td> {{ $weather->inventory_treunits }} </td></tr>
                                                <tr><th> Transects	 </th><td> {{ $weather->inventory_transect }} </td></tr>
                                                <tr><th> Control rules </th><td> {{ $weather->inventory_conruls }} </td></tr>
                                                <tr><th> Pollutants </th><td> {{ $weather->inventory_polluts }} </td></tr>
                                                <tr><th> Land Uses </th><td> {{ $weather->inventory_landus }} </td></tr>
                                                <tr><th> Control Curves </th><td> {{ $weather->conves }} </td></tr>
                                                <tr><th> Diversion Curves </th><td> {{ $weather->divsionves }} </td></tr>
                                                <tr><th> Pump Curves </th><td> {{ $weather->pumpves }} </td></tr>
                                                <tr><th> Rating Curves </th><td> {{ $weather->ratingves }} </td></tr>
                                                <tr><th> Shape Curves </th><td> {{ $weather->shapeves }} </td></tr>
                                                <tr><th> Storage Curves </th><td> {{ $weather->strogves }} </td></tr>
                                                <tr><th> Tidal Curves </th><td> {{ $weather->tidalves }} </td></tr>
                                                <tr><th> Weir Curves </th><td> {{ $weather->weirves }} </td></tr>
                                                <tr><th> Time Series </th><td> {{ $weather->timeseries }} </td></tr>
                                                <tr><th> Time Patterns </th><td> {{ $weather->timepatns }} </td></tr>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3>Options</h3>
                                    </div>
                                    <div class="widget-content">
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

                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3>Results statistics</h3>
                                    </div>
                                    <div class="widget-content">
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

                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3> Subcatchment statistics </h3>
                                    </div>
                                    <div class="widget-content">
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
                            
                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3>Model complexity</h3>
                                    </div>
                                    <div class="widget-content">
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

                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3> Unused objects </h3>
                                    </div>
                                    <div class="widget-content">
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
                            
                            
                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3>Summary/Conduit statistics.txt</h3>
                                    </div>
                                    <div class="widget-content">
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

                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3>Flow routing continuity</h3>
                                    </div>
                                    <div class="widget-content">
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

                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3>Inflows</h3>
                                    </div>
                                    <div class="widget-content">
                                        <table class="table table-sm">
                                            <tr><th> Time series inflows </th><td> {{ $weather->timeflows }} </td></tr>
                                            <tr><th> Dry weather inflows </th><td> {{ $weather->dryweaflows }} </td></tr>
                                            <tr><th> Groundwater inflows </th><td> {{ $weather->groundflows }} </td></tr>
                                            <tr><th> RDII inflows </th><td> {{ $weather->rdiiflows }} </td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3>Pipe inventory</h3>
                                    </div>
                                    <div class="widget-content">
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

                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3>Node statistics</h3>
                                    </div>
                                    <div class="widget-content">
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

                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3>Runoff quantity continuity</h3>
                                    </div>
                                    <div class="widget-content">
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

                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-header"> 
                                        <h3>Summary/Conduit Inventory.txt</h3>
                                    </div>
                                    <div class="widget-content">
                                        <table class="table table-sm">
                                            <tr><th> Circular (ft) </th><td> {{ $weather->circular }} </td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-md-12">
                                <div class="widget ">
                                    <div class="widget-header"> 
                                        <h3> Junction Flood </h3>
                                    </div>
                                    <div class="widget-content">
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
                                            <tr><th> Report Generate </th><td> {{ $weather->report_generate }} </td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
