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
                CARD
        </div>
    </div>
</div>
    <div class="col-md-6">
        <div class="widget">
            <div class="widget-header"> 
                <h3> Profile</h3>
            </div>

            <div class="widget-content">
            <tr>
                <th>ID</th><td>{{ $weather->id }}</td>
            </tr>
            
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="widget">
            <div class="widget-header"> 
                <h3> Radar</h3>
            </div>

            <div class="widget-content">
            http://weather.bangkok.go.th/FTPCustomer/radar/pics/nkradar.gif
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="widget">
            <div class="widget-header"> 
                <h3> Sum 1</h3>
            </div>
        <div class="widget-content">
            <table class="table table-sm">
                 <tr><th> Circular </th><td> {{ $weather->circular }} </td></tr>
                 <tr><th> Mxrougs </th><td> {{ $weather->mxrougs }} </td></tr>
                 <tr><th> Mnrougs </th><td> {{ $weather->mnrougs }} </td></tr>
                 <tr><th> Mxenlefs </th><td> {{ $weather->mxenlefs }} </td></tr>
                 <tr><th> Mienlefs </th><td> {{ $weather->mienlefs }} </td></tr>
                 <tr><th> Mxeloefs </th><td> {{ $weather->mxeloefs }} </td></tr>
                 <tr><th> Mneloefs </th><td> {{ $weather->mneloefs }} </td></tr>
                 <tr><th> Mxaglefs </th><td> {{ $weather->mxaglefs }} </td></tr>
                 <tr><th> Miaglefs </th><td> {{ $weather->miaglefs }} </td></tr>
                 <tr><th> Mxleths </th><td> {{ $weather->mxleths }} </td></tr>
                 <tr><th> Mileths </th><td> {{ $weather->mileths }} </td></tr>
                 <tr><th> Totallgth </th><td> {{ $weather->totallgth }} </td></tr>
                 <tr><th> Mxslope </th><td> {{ $weather->mxslope }} </td></tr>
                 <tr><th> Mislope </th><td> {{ $weather->mislope }} </td></tr>
                 <tr><th> Dryweaflow </th><td> {{ $weather->dryweaflow }} </td></tr>
                 <tr><th> Wetweaflow </th><td> {{ $weather->wetweaflow }} </td></tr>
                 <tr><th> Groundweaflow </th><td> {{ $weather->groundweaflow }} </td></tr>
                 <tr><th> Rdiiflow </th><td> {{ $weather->rdiiflow }} </td></tr>
                 <tr><th> Exnalflow </th><td> {{ $weather->exnalflow }} </td></tr>
                 <tr><th> Exnaloutflow </th><td> {{ $weather->exnaloutflow }} </td></tr>
                 <tr><th> Floodloss </th><td> {{ $weather->floodloss }} </td></tr>
                 <tr><th> Evaloss </th><td> {{ $weather->evaloss }} </td></tr>
                 <tr><th> Exfiltionloss </th><td> {{ $weather->exfiltionloss }} </td></tr>
                 <tr><th> Lnitialvols </th><td> {{ $weather->lnitialvols }} </td></tr>
                 <tr><th> Finalvols </th><td> {{ $weather->finalvols }} </td></tr>
                 <tr><th> Conerrors </th><td> {{ $weather->conerrors }} </td></tr>
                 <tr><th> Timeflows </th><td> {{ $weather->timeflows }} </td></tr>
                 <tr><th> Dryweaflows </th><td> {{ $weather->dryweaflows }} </td></tr>
                 <tr><th> Groundflows </th><td> {{ $weather->groundflows }} </td></tr>
                 <tr><th> Rdiiflows </th><td> {{ $weather->rdiiflows }} </td></tr>
                 <tr><th> Subments </th><td> {{ $weather->subments }} </td></tr>
                 <tr><th> Grounwter </th><td> {{ $weather->grounwter }} </td></tr>
                 <tr><th> Complexity Aquifers </th><td> {{ $weather->complexity_aquifers }} </td></tr>
                 <tr><th> Complexity Snows </th><td> {{ $weather->complexity_snows }} </td></tr>
                 <tr><th> Complexity Rdiigraphs </th><td> {{ $weather->complexity_rdiigraphs }} </td></tr>
                 <tr><th> Complexity Jundes </th><td> {{ $weather->complexity_jundes }} </td></tr>
                 <tr><th> Complexity Outdes </th><td> {{ $weather->complexity_outdes }} </td></tr>
                 <tr><th> Complexity Fldides </th><td> {{ $weather->complexity_fldides }} </td></tr>
                 <tr><th> Complexity Storaundes </th><td> {{ $weather->complexity_storaundes }} </td></tr>
                 <tr><th> Complexity Conlinks </th><td> {{ $weather->complexity_conlinks }} </td></tr>
                 <tr><th> Complexity Pumplinks </th><td> {{ $weather->complexity_pumplinks }} </td></tr
                 ><tr><th> Complexity Oriflinks </th><td> {{ $weather->complexity_oriflinks }} </td></tr
                 ><tr><th> Complexity Weirlinks </th><td> {{ $weather->complexity_weirlinks }} </td></tr>
                 <tr><th> Complexity Outlinks </th><td> {{ $weather->complexity_outlinks }} </td></tr>
                 <tr><th> Complexity Transect </th><td> {{ $weather->complexity_transect }} </td></tr>
                 <tr><th> Complexity Polluts </th><td> {{ $weather->complexity_polluts }} </td></tr>
                 <tr><th> Complexity Landus </th><td> {{ $weather->complexity_landus }} </td></tr>
                 <tr><th> Totalcomity </th><td> {{ $weather->totalcomity }} </td></tr>
                 <tr><th> Raings </th><td> {{ $weather->raings }} </td></tr>
                 <tr><th> Inventory Subments </th><td> {{ $weather->inventory_subments }} </td></tr>
                 <tr><th> Inventory Aquifers </th><td> {{ $weather->inventory_aquifers }} </td></tr>
                 <tr><th> Inventory Snows </th><td> {{ $weather->inventory_snows }} </td></tr>
                 <tr><th> Inventory Rdiigraphs </th><td> {{ $weather->inventory_rdiigraphs }} </td></tr>
                 <tr><th> Inventory Jundes </th><td> {{ $weather->inventory_jundes }} </td></tr>
                 <tr><th> Inventory Outdes </th><td> {{ $weather->inventory_outdes }} </td></tr>
                 <tr><th> Inventory Fldides </th><td> {{ $weather->inventory_fldides }} </td></tr>
                 <tr><th> Inventory Storaundes </th><td> {{ $weather->inventory_storaundes }} </td></tr>
                 <tr><th> Inventory Conlinks </th><td> {{ $weather->inventory_conlinks }} </td></tr>
                 <tr><th> Inventory Pumplinks </th><td> {{ $weather->inventory_pumplinks }} </td></tr>
                 <tr><th> Inventory Oriflinks </th><td> {{ $weather->inventory_oriflinks }} </td></tr>
                 <tr><th> Inventory Weirlinks </th><td> {{ $weather->inventory_weirlinks }} </td></tr>
            </table>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="widget">
        <div class="widget-header"> 
            <h3> Sum 2</h3>
</div>
    <div class="widget-content">
            <table class="table table-sm">
                <tr><th> Inventory Outlinks </th><td> {{ $weather->inventory_outlinks }} </td></tr>
                <tr><th> Inventory Treunits </th><td> {{ $weather->inventory_treunits }} </td></tr>
                <tr><th> Inventory Transect </th><td> {{ $weather->inventory_transect }} </td></tr>
                <tr><th> Inventory Conruls </th><td> {{ $weather->inventory_conruls }} </td></tr>
                <tr><th> Inventory Polluts </th><td> {{ $weather->inventory_polluts }} </td></tr>
                <tr><th> Inventory Landus </th><td> {{ $weather->inventory_landus }} </td></tr>
                <tr><th> Conves </th><td> {{ $weather->conves }} </td></tr>
                <tr><th> Divsionves </th><td> {{ $weather->divsionves }} </td></tr>
                <tr><th> Pumpves </th><td> {{ $weather->pumpves }} </td></tr>
                <tr><th> Ratingves </th><td> {{ $weather->ratingves }} </td></tr>
                <tr><th> Shapeves </th><td> {{ $weather->shapeves }} </td></tr>
                <tr><th> Strogves </th><td> {{ $weather->strogves }} </td></tr>
                <tr><th> Tidalves </th><td> {{ $weather->tidalves }} </td></tr>
                <tr><th> Weirves </th><td> {{ $weather->weirves }} </td></tr>
                <tr><th> Timeseries </th><td> {{ $weather->timeseries }} </td></tr>
                <tr><th> Timepatns </th><td> {{ $weather->timepatns }} </td></tr>
                <tr><th> Mxgroudev </th><td> {{ $weather->mxgroudev }} </td></tr>
                <tr><th> Mngroudev </th><td> {{ $weather->mngroudev }} </td></tr>
                <tr><th> Mxvertev </th><td> {{ $weather->mxvertev }} </td></tr>
                <tr><th> Mnvertev </th><td> {{ $weather->mnvertev }} </td></tr>
                <tr><th> Mxdepth </th><td> {{ $weather->mxdepth }} </td></tr>
                <tr><th> Midepth </th><td> {{ $weather->midepth }} </td></tr>
                <tr><th> Flowunits </th><td> {{ $weather->flowunits }} </td></tr>
                <tr><th> Inftionmet </th><td> {{ $weather->inftionmet }} </td></tr>
                <tr><th> Flowtingmet </th><td> {{ $weather->flowtingmet }} </td></tr>
                <tr><th> Linkoffsetsned </th><td> {{ $weather->linkoffsetsned }} </td></tr>
                <tr><th> Allowding </th><td> {{ $weather->allowding }} </td></tr>
                <tr><th> Skipflowds </th><td> {{ $weather->skipflowds }} </td></tr>
                <tr><th> Inertialing </th><td> {{ $weather->inertialing }} </td></tr>
                <tr><th> Defineflow </th><td> {{ $weather->defineflow }} </td></tr>
                <tr><th> Forcetion </th><td> {{ $weather->forcetion }} </td></tr>
                <tr><th> Variable </th><td> {{ $weather->variable }} </td></tr>
                <tr><th> Adjustment </th><td> {{ $weather->adjustment }} </td></tr>
                <tr><th> Conduit </th><td> {{ $weather->conduit }} </td></tr>
                <tr><th> Surface </th><td> {{ $weather->surface }} </td></tr>
                <tr><th> Startingdate </th><td> {{ $weather->startingdate }} </td></tr>
                <tr><th> Endingdate </th><td> {{ $weather->endingdate }} </td></tr>
                <tr><th> Duration </th><td> {{ $weather->duration }} </td></tr>
                <tr><th> Antecedent </th><td> {{ $weather->antecedent }} </td></tr>
                <tr><th> Rain </th><td> {{ $weather->rain }} </td></tr>
                <tr><th> Reporttime </th><td> {{ $weather->reporttime }} </td></tr>
                <tr><th> Wettime </th><td> {{ $weather->wettime }} </td></tr>
                <tr><th> Drytime </th><td> {{ $weather->drytime }} </td></tr>
                <tr><th> Routingtime </th><td> {{ $weather->routingtime }} </td></tr>
                <tr><th> Minimumtime </th><td> {{ $weather->minimumtime }} </td></tr>
                <tr><th> Avgtime </th><td> {{ $weather->avgtime }} </td></tr>
                <tr><th> Minimumcons </th><td> {{ $weather->minimumcons }} </td></tr>
                <tr><th> Lgnoreofs </th><td> {{ $weather->lgnoreofs }} </td></tr>
                <tr><th> Lgnoremelt </th><td> {{ $weather->lgnoremelt }} </td></tr>
                <tr><th> Lgnoreter </th><td> {{ $weather->lgnoreter }} </td></tr>
                <tr><th> Lgnoreing </th><td> {{ $weather->lgnoreing }} </td></tr>
                <tr><th> Lgnorety </th><td> {{ $weather->lgnorety }} </td></tr>
                <tr><th> Reportavgs </th><td> {{ $weather->reportavgs }} </td></tr>
                <tr><th> Mxpipeter </th><td> {{ $weather->mxpipeter }} </td></tr>
                <tr><th> Mnpipditer </th><td> {{ $weather->mnpipditer }} </td></tr>
                <tr><th> Totalpipeth </th><td> {{ $weather->totalpipeth }} </td></tr>
                <tr><th> Totalotherth </th><td> {{ $weather->totalotherth }} </td></tr>
                <tr><th> Totalpipth </th><td> {{ $weather->totalpipth }} </td></tr>
                <tr><th> Maxmg </th><td> {{ $weather->maxmg }} </td></tr>
                <tr><th> Maxcfs </th><td> {{ $weather->maxcfs }} </td></tr>
                <tr><th> Maxcoeffnt </th><td> {{ $weather->maxcoeffnt }} </td></tr>
            </table>
        </div>
    </div>
</div>
    <div class="col-md-6">
        <div class="widget">
            <div class="widget-header"> 
                <h3> Sum 3</h3>
            </div>
        <div class="widget-content">
            <table class="table table-sm">
                 <tr><th> Maxin </th><td> {{ $weather->maxin }} </td></tr>
                 <tr><th> Minin </th><td> {{ $weather->minin }} </td></tr>
                 <tr><th> Mxnode </th><td> {{ $weather->mxnode }} </td></tr>
                 <tr><th> Surcharged </th><td> {{ $weather->surcharged }} </td></tr>
                 <tr><th> Nodesurched </th><td> {{ $weather->nodesurched }} </td></tr>
                 <tr><th> Maxcrown </th><td> {{ $weather->maxcrown }} </td></tr>
                 <tr><th> Minbelow </th><td> {{ $weather->minbelow }} </td></tr>
                 <tr><th> Flooded </th><td> {{ $weather->flooded }} </td></tr>
                 <tr><th> Flooding </th><td> {{ $weather->flooding }} </td></tr>
                 <tr><th> Floodmg </th><td> {{ $weather->floodmg }} </td></tr>
                 <tr><th> Pondedvolume </th><td> {{ $weather->pondedvolume }} </td></tr>
                 <tr><th> Maxvolume </th><td> {{ $weather->maxvolume }} </td></tr>
                 <tr><th> Maxperfull </th><td> {{ $weather->maxperfull }} </td></tr>
                 <tr><th> Maxfrecy </th><td> {{ $weather->maxfrecy }} </td></tr>
                 <tr><th> Maxflow </th><td> {{ $weather->maxflow }} </td></tr>
                 <tr><th> Maxoutfallmg </th><td> {{ $weather->maxoutfallmg }} </td></tr>
                 <tr><th> Totalmg </th><td> {{ $weather->totalmg }} </td></tr>
                 <tr><th> Maxpeak </th><td> {{ $weather->maxpeak }} </td></tr>
                 <tr><th> Maxlinkty </th><td> {{ $weather->maxlinkty }} </td></tr>
                 <tr><th> Minpeakty </th><td> {{ $weather->minpeakty }} </td></tr>
                 <tr><th> Conduits </th><td> {{ $weather->conduits }} </td></tr>
                 <tr><th> Maxconduits </th><td> {{ $weather->maxconduits }} </td></tr>
                 <tr><th> Maxcapacity </th><td> {{ $weather->maxcapacity }} </td></tr>
                 <tr><th> Lidstroage </th><td> {{ $weather->lidstroage }} </td></tr>
                 <tr><th> Snowcover </th><td> {{ $weather->snowcover }} </td></tr>
                 <tr><th> Totalin </th><td> {{ $weather->totalin }} </td></tr>
                 <tr><th> Runonin </th><td> {{ $weather->runonin }} </td></tr>
                 <tr><th> Evalossin </th><td> {{ $weather->evalossin }} </td></tr>
                 <tr><th> Infitionloss </th><td> {{ $weather->infitionloss }} </td></tr>
                 <tr><th> Surfacein </th><td> {{ $weather->surfacein }} </td></tr>
                 <tr><th> Drainage </th><td> {{ $weather->drainage }} </td></tr>
                 <tr><th> Snowved </th><td> {{ $weather->snowved }} </td></tr>
                 <tr><th> Finalsnow </th><td> {{ $weather->finalsnow }} </td></tr>
                 <tr><th> Finalin </th><td> {{ $weather->finalin }} </td></tr>
                 <tr><th> Conerror </th><td> {{ $weather->conerror }} </td></tr>
            </table>
        </div>
    </div>
</div>
<div class="col-md-6">
        <div class="widget">
            <div class="widget-header"> 
              <h3> Sum 4 </h3>
            </div>
        <div class="widget-content">
            <table class="table table-sm">
                <tr><th> Maxwidth </th><td> {{ $weather->maxwidth }} </td></tr>
                <tr><th> Minwidth </th><td> {{ $weather->minwidth }} </td></tr>
                <tr><th> Maxarea </th><td> {{ $weather->maxarea }} </td></tr>
                <tr><th> Minarea </th><td> {{ $weather->minarea }} </td></tr>
                <tr><th> Totalarea </th><td> {{ $weather->totalarea }} </td></tr>
                <tr><th> Results Maxflow </th><td> {{ $weather->results_maxflow }} </td></tr>
                <tr><th> Minflow </th><td> {{ $weather->minflow }}</td></tr>
                <tr><th> Maxslope </th><td> {{ $weather->maxslope }} </td></tr>
                <tr><th> Minslope </th><td> {{ $weather->minslope }} </td></tr>
                <tr><th> Subcat Maximpness </th><td> {{ $weather->subcat_maximpness }} </td></tr>
                <tr><th> Subcat Minimpness </th><td> {{ $weather->subcat_minimpness }} </td></tr>
                <tr><th> Maximpness </th><td> {{ $weather->maximpness }} </td></tr>
                <tr><th> Minimpness </th><td> {{ $weather->minimpness }} </td></tr>
                <tr><th> Subcat Maxperv </th><td> {{ $weather->subcat_maxperv }} </td></tr>
                <tr><th> Subcat Minperv </th><td> {{ $weather->subcat_minperv }} </td></tr>
                <tr><th> Maximp </th><td> {{ $weather->maximp }} </td></tr>
                <tr><th> Minimp </th><td> {{ $weather->minimp }} </td></tr>
                <tr><th> Maxperv </th><td> {{ $weather->maxperv }} </td></tr>
                <tr><th> Minperv </th><td> {{ $weather->minperv }} </td></tr>
                <tr><th> Gages </th><td> {{ $weather->gages }} </td></tr>
                <tr><th> Aquifers </th><td> {{ $weather->aquifers }} </td></tr>
                <tr><th> Snowpacks </th><td> {{ $weather->snowpacks }} </td></tr>
                <tr><th> Unitgraphs </th><td> {{ $weather->unitgraphs }} </td></tr>
                <tr><th> Transects </th><td> {{ $weather->transects }} </td></tr>
                <tr><th> Curves </th><td> {{ $weather->curves }} </td></tr>
                <tr><th> Diverves </th><td> {{ $weather->diverves }} </td></tr>
                <tr><th> Unused Pumpves </th><td> {{ $weather->unused_pumpves }} </td></tr>
                <tr><th> Unused Ratingves </th><td> {{ $weather->unused_ratingves }} </td></tr>
                <tr><th> Unused Shapeves </th><td> {{ $weather->unused_shapeves }} </td></tr>
                <tr><th> Storageves </th><td> {{ $weather->storageves }} </td></tr>
                <tr><th> Unused Tidalves </th><td> {{ $weather->unused_tidalves }} </td></tr>
                <tr><th> Unused Weirves </th><td> {{ $weather->unused_weirves }} </td></tr>
                <tr><th> Unused Timeseries </th><td> {{ $weather->unused_timeseries }} </td></tr>
                <tr><th> Timepatts </th><td> {{ $weather->timepatts }} </td></tr>
                <tr><th> InvertevsJ1 </th><td> {{ $weather->invertevsJ1 }} </td></tr>
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
                <tr><th> InvertevsJ2 </th><td> {{ $weather->invertevsJ2 }} </td></tr>
                <tr><th> InvertevsJ3 </th><td> {{ $weather->invertevsJ3 }} </td></tr>
                <tr><th> InvertevsJ4 </th><td> {{ $weather->invertevsJ4 }} </td></tr>
                <tr><th> InvertevsJ3 1 </th><td> {{ $weather->invertevsJ3_1 }} </td></tr>
                <tr><th> InvertevsJ3 2 </th><td> {{ $weather->invertevsJ3_2 }} </td></tr>
                <tr><th> RimJ1 </th><td> {{ $weather->rimJ1 }} </td></tr>
                <tr><th> RimJ2 </th><td> {{ $weather->rimJ2 }} </td></tr>
                <tr><th> RimJ3 </th><td> {{ $weather->rimJ3 }} </td></tr>
                <tr><th> RimJ4 </th><td> {{ $weather->rimJ4 }} </td></tr>
                <tr><th> RimJ3 1 </th><td> {{ $weather->rimJ3_1 }} </td></tr>
                <tr><th> RimJ3 2 </th><td> {{ $weather->rimJ3_2 }} </td></tr>
                <tr><th> TotalmgJ1 </th><td> {{ $weather->totalmgJ1 }} </td></tr>
                <tr><th> TotalmgJ2 </th><td> {{ $weather->totalmgJ2 }} </td></tr>
                <tr><th> TotalmgJ3 </th><td> {{ $weather->totalmgJ3 }} </td></tr>
                <tr><th> TotalmgJ4 </th><td> {{ $weather->totalmgJ4 }} </td></tr>
                <tr><th> TotalmgJ3 1 </th><td> {{ $weather->totalmgJ3_1 }} </td></tr>
                <tr><th> TotalmgJ3 2 </th><td> {{ $weather->totalmgJ3_2 }} </td>
                <tr><th> Report Generate </th><td> {{ $weather->report_generate }} </td></tr>
            </table>
        </div>
    </div>
</div>

@endsection
