<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWeathersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weathers', function (Blueprint $table) {
            $table->increments('id'); 
            $table->timestamps();
            $table->string('Outfalls',10)->nullable();//Outfall.png
            $table->string('kmls',10)->nullable();//test1.kmz
            $table->string('profiles',10)->nullable();//Main Drains.png
            $table->string('circular',10)->nullable();//Conduit statistics.txt
            $table->string('mxrougs',10)->nullable(); //Conduit statistics.txt 
            $table->string('mnrougs',10)->nullable();//Conduit statistics.txt
            $table->string('mxenlefs',10)->nullable();  //Conduit statistics.txt
            $table->string('mienlefs',10)->nullable();//Conduit statistics.txt
            $table->string('mxeloefs',10)->nullable(); //Conduit statistics.txt
            $table->string('mneloefs',10)->nullable();  //Conduit statistics.txt
            $table->string('mxaglefs',10)->nullable();  //Conduit statistics.txt
            $table->string('miaglefs',10)->nullable(); //Conduit statistics.txt
            $table->string('mxleths',10)->nullable();//Conduit statistics.txt
            $table->string('mileths',10)->nullable();//Conduit statistics.txt
            $table->string('totallgth',10)->nullable(); //Conduit statistics.txt
            $table->string('mxslope',10)->nullable();//Conduit statistics.txt
            $table->string('mislope',10)->nullable(); //Conduit statistics.txt
            $table->string('dryweaflow',10)->nullable();  //Flow routing continuity
            $table->string('wetweaflow',10)->nullable();  //Flow routing continuity
            $table->string('groundweaflow',10)->nullable();//Flow routing continuity
            $table->string('rdiiflow',10)->nullable();//Flow routing continuity
            $table->string('exnalflow',10)->nullable();//Flow routing continuity
            $table->string('exnaloutflow',10)->nullable();//Flow routing continuity
            $table->string('floodloss',10)->nullable();//Flow routing continuity
            $table->string('evaloss',10)->nullable();// Flow routing continuity
            $table->string('exfiltionloss',10)->nullable();//Flow routing continuity
            $table->string('lnitialvols',10)->nullable();// Flow routing continuity
            $table->string('finalvols',10)->nullable();// Flow routing continuity
            $table->string('conerrors',10)->nullable();// Flow routing continuity
            $table->string('timeflows',10)->nullable();//Inflows
            $table->string('dryweaflows',10)->nullable();//Inflows
            $table->string('groundflows',10)->nullable();//Inflows
            $table->string('rdiiflows',10)->nullable();//Inflows
            $table->string('subments',10)->nullable();//Model complexity
            $table->string('grounwter',10)->nullable();//Model complexity
            $table->string('complexity_aquifers',10)->nullable();//Model complexity
            $table->string('complexity_snows',10)->nullable();//Model complexity
            $table->string('complexity_rdiigraphs',10)->nullable();//Model complexity
            $table->string('complexity_jundes',10)->nullable();//Model complexity
            $table->string('complexity_outdes',10)->nullable();//Model complexity
            $table->string('complexity_fldides',10)->nullable();//Model complexity
            $table->string('complexity_storaundes',10)->nullable();//Model complexity
            $table->string('complexity_conlinks',10)->nullable();//Model complexity
            $table->string('complexity_pumplinks',10)->nullable();//Model complexity
            $table->string('complexity_oriflinks',10)->nullable();//Model complexity
            $table->string('complexity_weirlinks',10)->nullable();//Model complexity
            $table->string('complexity_outlinks',10)->nullable();//Model complexity
            $table->string('complexity_transect',10)->nullable();//Model complexity
            $table->string('complexity_polluts',10)->nullable();//Model complexity
            $table->string('complexity_landus',10)->nullable();//Model complexity
            $table->string('totalcomity',10)->nullable();//Model complexity
            $table->string('raings',10)->nullable();//Model inventory
            $table->string('inventory_subments',10)->nullable();//Model inventory
            $table->string('inventory_aquifers',10)->nullable();//Model inventory
            $table->string('inventory_snows',10)->nullable();//Model inventory
            $table->string('inventory_rdiigraphs',10)->nullable();//Model inventory
            $table->string('inventory_jundes',10)->nullable();//Model inventory
            $table->string('inventory_outdes',10)->nullable();//Model inventory
            $table->string('inventory_fldides',10)->nullable();//Model inventory
            $table->string('inventory_storaundes',10)->nullable();//Model inventory
            $table->string('inventory_conlinks',10)->nullable();//Model inventory
            $table->string('inventory_pumplinks',10)->nullable();//Model inventory
            $table->string('inventory_oriflinks',10)->nullable();//Model inventory
            $table->string('inventory_weirlinks',10)->nullable();//Model inventory
            $table->string('inventory_outlinks',10)->nullable();//Model inventory
            $table->string('inventory_treunits',10)->nullable();//Model inventory
            $table->string('inventory_transect',10)->nullable();//Model inventory
            $table->string('inventory_conruls',10)->nullable();//Model inventory
            $table->string('inventory_polluts',10)->nullable();//Model inventory
            $table->string('inventory_landus',10)->nullable();//Model inventory
            $table->string('conves',10)->nullable();//Model inventory
            $table->string('divsionves',10)->nullable();//Model inventory
            $table->string('pumpves',10)->nullable();//Model inventory
            $table->string('ratingves',10)->nullable();//Model inventory
            $table->string('shapeves',10)->nullable();//Model inventory
            $table->string('strogves',10)->nullable();//Model inventory
            $table->string('tidalves',10)->nullable();//Model inventory
            $table->string('weirves',10)->nullable();//Model inventory
            $table->string('timeseries',10)->nullable();//Model inventory
            $table->string('timepatns',10)->nullable();//Model inventory
            $table->string('mxgroudev',10)->nullable();//Node statistics
            $table->string('mngroudev',10)->nullable();//Node statistics
            $table->string('mxvertev',10)->nullable();//Node statistics
            $table->string('mnvertev',10)->nullable();//Node statistics
            $table->string('mxdepth',10)->nullable();//Node statistics
            $table->string('midepth',10)->nullable();//Node statistics
            $table->string('flowunits',10)->nullable();//Options
            $table->string('inftionmet',10)->nullable();//Options
            $table->string('flowtingmet',20)->nullable();//Options
            $table->string('linkoffsetsned',10)->nullable();//Options
            $table->string('allowding',10)->nullable();//Options
            $table->string('skipflowds',10)->nullable();//Options
            $table->string('inertialing',10)->nullable();//Options
            $table->string('defineflow',10)->nullable();//Options
            $table->string('forcetion',10)->nullable();//Options
            $table->string('variable',10)->nullable();//Options
            $table->string('adjustment',10)->nullable();//Options
            $table->string('conduit',10)->nullable();//Options
            $table->string('surface',10)->nullable();//Options
            $table->string('startingdate',30)->nullable();//Options
            $table->string('endingdate',30)->nullable();//Options
            $table->string('duration',10)->nullable();//Options
            $table->string('antecedent',10)->nullable();//Options
            $table->string('rain',10)->nullable();//Options
            $table->string('reporttime',10)->nullable();//Options
            $table->string('wettime',10)->nullable();//Options
            $table->string('drytime',10)->nullable();//Options
            $table->string('routingtime',10)->nullable();//Options
            $table->string('minimumtime',10)->nullable();//Options
            $table->string('avgtime',10)->nullable();//Options
            $table->string('minimumcons',10)->nullable();//Options
            $table->string('lgnoreofs',10)->nullable();//Options
            $table->string('lgnoremelt',10)->nullable();//Options
            $table->string('lgnoreter',10)->nullable();//Options
            $table->string('lgnoreing',10)->nullable();//Options
            $table->string('lgnorety',10)->nullable();//Options
            $table->string('reportavgs',10)->nullable();//Options
            $table->string('mxpipeter',10)->nullable();//Pipe inventory
            $table->string('mnpipditer',10)->nullable();//Pipe inventory
            $table->string('totalpipeth',10)->nullable();//Pipe inventory
            $table->string('totalotherth',10)->nullable();//Pipe inventory
            $table->string('totalpipth',10)->nullable();//Pipe inventory
            $table->string('maxmg',10)->nullable();//Results statistics
            $table->string('maxcfs',10)->nullable();//Results statistics
            $table->string('maxcoeffnt',10)->nullable();//Results statistics
            $table->string('maxin',10)->nullable();//Results statistics
            $table->string('minin',10)->nullable();//Results statistics
            $table->string('mxnode',10)->nullable();//Results statistics
            $table->string('surcharged')->nullable();//Results statistics
            $table->string('nodesurched',10)->nullable();//Results statistics
            $table->string('maxcrown',10)->nullable();//Results statistics
            $table->string('minbelow',10)->nullable();//Results statistics
            $table->string('flooded',10)->nullable();//Results statistics
            $table->string('flooding',10)->nullable();//Results statistics
            $table->string('floodmg',10)->nullable();//Results statistics
            $table->string('pondedvolume',10)->nullable();//Results statistics
            $table->string('maxvolume',10)->nullable();//Results statistics
            $table->string('maxperfull',10)->nullable();//Results statistics
            $table->string('maxfrecy',10)->nullable();//Results statistics
            $table->string('maxflow',10)->nullable();//Results statistics
            $table->string('maxoutfallmg',10)->nullable();//Results statistics
            $table->string('totalmg',10)->nullable();//Results statistics
            $table->string('maxpeak',10)->nullable();//Results statistics
            $table->string('maxlinkty',10)->nullable();//Results statistics
            $table->string('minpeakty',10)->nullable();//Results statistics
            $table->string('conduits',10)->nullable();//Results statistics
            $table->string('maxconduits',10)->nullable();//Results statistics
            $table->string('maxcapacity',10)->nullable();//Results statistics
            $table->string('lidstroage',10)->nullable();//Runoff quantity continuity
            $table->string('snowcover',10)->nullable();//Runoff quantity continuity
            $table->string('totalin',10)->nullable();//Runoff quantity continuity
            $table->string('runonin',10)->nullable();//Runoff quantity continuity
            $table->string('evalossin',10)->nullable();//Runoff quantity continuity
            $table->string('infitionloss',10)->nullable();//Runoff quantity continuity
            $table->string('surfacein',10)->nullable();//Runoff quantity continuity
            $table->string('drainage',10)->nullable();//Runoff quantity continuity
            $table->string('snowved',10)->nullable();//Runoff quantity continuity
            $table->string('finalsnow',10)->nullable();//Runoff quantity continuity
            $table->string('finalin',10)->nullable();//Runoff quantity continuity
            $table->string('conerror',10)->nullable();//Runoff quantity continuity
            $table->string('maxwidth',10)->nullable();//Subcatchment statistics
            $table->string('minwidth',10)->nullable();//Subcatchment statistics
            $table->string('maxarea',10)->nullable();//Subcatchment statistics
            $table->string('minarea',10)->nullable();//Subcatchment statistics
            $table->string('totalarea',10)->nullable();//Subcatchment statistics
            $table->string('results_maxflow',10)->nullable();//Subcatchment statistics
            $table->string('minflow',10)->nullable();//Subcatchment statistics
            $table->string('maxslope',10)->nullable();//Subcatchment statistics
            $table->string('minslope',10)->nullable();//Subcatchment statistics
            $table->string('subcat_maximpness',10)->nullable();//Subcatchment statistics
            $table->string('subcat_minimpness',10)->nullable();//Subcatchment statistics
            $table->string('maximpness',10)->nullable();//Subcatchment statistics
            $table->string('minimpness',10)->nullable();//Subcatchment statistics
            $table->string('subcat_maxperv',10)->nullable();//Subcatchment statistics
            $table->string('subcat_minperv',10)->nullable();//Subcatchment statistics
            $table->string('maximp',10)->nullable();//Unused objects
            $table->string('minimp',10)->nullable();//Unused objects
            $table->string('maxperv',10)->nullable();//Unused objects
            $table->string('minperv',10)->nullable();//Unused objects
            $table->string('gages',10)->nullable();//Unused objects
            $table->string('aquifers',10)->nullable();//Unused objects
            $table->string('snowpacks',10)->nullable();//Unused objects
            $table->string('unitgraphs',10)->nullable();//Unused objects
            $table->string('transects',10)->nullable();//Unused objects
            $table->string('curves',10)->nullable();//Unused objects
            $table->string('diverves',10)->nullable();//Unused objects
            $table->string('unused_pumpves',10)->nullable();//Unused objects
            $table->string('unused_ratingves',10)->nullable();//Unused objects
            $table->string('unused_shapeves',10)->nullable();//Unused objects
            $table->string('storageves',10)->nullable();//Unused objects
            $table->string('unused_tidalves',10)->nullable();//Unused objects
            $table->string('unused_weirves',10)->nullable();//Unused objects
            $table->string('unused_timeseries',10)->nullable();//Unused objects
            $table->string('timepatts',10)->nullable();//Unused objects
            $table->string('invertevsJ1',10)->nullable();//Junctions Flood.txt
            $table->string('invertevsJ2',10)->nullable();//Junctions Flood.txt
            $table->string('invertevsJ3',10)->nullable();//Junctions Flood.txt
            $table->string('invertevsJ4',10)->nullable();//Junctions Flood.txt
            $table->string('invertevsJ3_1',10)->nullable();//Junctions Flood.txt
            $table->string('invertevsJ3_2',10)->nullable();//Junctions Flood.txt
            $table->string('rimJ1',10)->nullable();//Junctions Flood.txt
            $table->string('rimJ2',10)->nullable();//Junctions Flood.txt
            $table->string('rimJ3',10)->nullable();//Junctions Flood.txt
            $table->string('rimJ4',10)->nullable();//Junctions Flood.txt
            $table->string('rimJ3_1',10)->nullable();//Junctions Flood.txt
            $table->string('rimJ3_2',10)->nullable();//Junctions Flood.txt
            $table->string('totalmgJ1',10)->nullable();//Junctions Flood.txt
            $table->string('totalmgJ2',10)->nullable();//Junctions Flood.txt
            $table->string('totalmgJ3',10)->nullable();//Junctions Flood.txt
            $table->string('totalmgJ4',10)->nullable();//Junctions Flood.txt
            $table->string('totalmgJ3_1',10)->nullable();//Junctions Flood.txt
            $table->string('totalmgJ3_2',10)->nullable();//Junctions Flood.txt
            $table->string('report_generate',50)->nullable();//test.html
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('weathers');
    }
}
