<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'weathers';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    //protected $fillable = ['Outfalls', 'kmls', 'profiles', 'circular', 'mxrougs', 'mnrougs', 'mxenlefs', 'mienlefs', 'mxeloefs', 'mneloefs', 'mxaglefs', 'miaglefs', 'mxleths', 'mileths', 'totallgth', 'mxslope', 'mislope', 'dryweaflow', 'wetweaflow', 'groundweaflow', 'rdiiflow', 'exnalflow', 'exnaloutflow', 'floodloss', 'evaloss', 'exfiltionloss', 'lnitialvols', 'finalvols', 'conerrors', 'timeflows', 'dryweaflows', 'groundflows', 'rdiiflows', 'subments', 'grounwter', 'complexity_aquifers', 'complexity_snows', 'complexity_rdiigraphs', 'complexity_jundes', 'complexity_outdes', 'complexity_fldides', 'complexity_storaundes', 'complexity_conlinks', 'complexity_pumplinks', 'complexity_oriflinks', 'complexity_weirlinks', 'complexity_outlinks', 'complexity_transect', 'complexity_polluts', 'complexity_landus', 'totalcomity', 'raings', 'inventory_subments', 'inventory_aquifers', 'inventory_snows', 'inventory_rdiigraphs', 'inventory_jundes', 'inventory_outdes', 'inventory_fldides', 'inventory_storaundes', 'inventory_conlinks', 'inventory_pumplinks', 'inventory_oriflinks', 'inventory_weirlinks', 'inventory_outlinks', 'inventory_treunits', 'inventory_transect', 'inventory_conruls', 'inventory_polluts', 'inventory_landus', 'conves', 'divsionves', 'pumpves', 'ratingves', 'shapeves', 'strogves', 'tidalves', 'weirves', 'timeseries', 'timepatns', 'mxgroudev', 'mngroudev', 'mxvertev', 'mnvertev', 'mxdepth', 'midepth', 'flowunits', 'inftionmet', 'flowtingmet', 'linkoffsetsned', 'allowding', 'skipflowds', 'inertialing', 'defineflow', 'forcetion', 'variable', 'adjustment', 'conduit', 'surface', 'startingdate', 'endingdate', 'duration', 'antecedent', 'rain', 'reporttime', 'wettime', 'drytime', 'routingtime', 'minimumtime', 'avgtime', 'minimumcons', 'lgnoreofs', 'lgnoremelt', 'lgnoreter', 'lgnoreing', 'lgnorety', 'reportavgs', 'mxpipeter', 'mnpipditer', 'totalpipeth', 'totalotherth', 'totalpipth', 'maxmg', 'maxcfs', 'maxcoeffnt', 'maxin', 'minin', 'mxnode', 'surcharged', 'nodesurched', 'maxcrown', 'minbelow', 'flooded', 'flooding', 'floodmg', 'pondedvolume', 'maxvolume', 'maxperfull', 'maxfrecy', 'maxflow', 'maxoutfallmg', 'totalmg', 'maxpeak', 'maxlinkty', 'minpeakty', 'conduits', 'maxconduits', 'maxcapacity', 'lidstroage', 'snowcover', 'totalin', 'runonin', 'evalossin', 'infitionloss', 'surfacein', 'drainage', 'snowved', 'finalsnow', 'finalin', 'conerror', 'maxwidth', 'minwidth', 'maxarea', 'minarea', 'totalarea', 'results_maxflow', 'minflow', 'maxslope', 'minslope', 'subcat_maximpness', 'subcat_minimpness', 'maximpness', 'minimpness', 'subcat_maxperv', 'subcat_minperv', 'maximp', 'minimp', 'maxperv', 'minperv', 'gages', 'aquifers', 'snowpacks', 'unitgraphs', 'transects', 'curves', 'diverves', 'unused_pumpves', 'unused_ratingves', 'unused_shapeves', 'storageves', 'unused_tidalves', 'unused_weirves', 'unused_timeseries', 'timepatts', 'invertevsJ1', 'invertevsJ2', 'invertevsJ3', 'invertevsJ4', 'invertevsJ3_1', 'invertevsJ3_2', 'rimJ1', 'rimJ2', 'rimJ3', 'rimJ4', 'rimJ3_1', 'rimJ3_2', 'totalmgJ1', 'totalmgJ2', 'totalmgJ3', 'totalmgJ4', 'totalmgJ3_1', 'totalmgJ3_2', 'report_generate'];
    protected $fillable = ['Outfalls', 'kmls', 'profiles',  'report_generate', 'detail', 'profiles2', 'profiles3', 'profiles4', 'profiles5','weather_bangkok'];


    
}
