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
            $table->text('Outfalls')->nullable();//Outfall.png
            $table->text('kmls')->nullable();//test1.kmz
            $table->text('profiles')->nullable();//Main Drains.png
            $table->text('circular')->nullable();//Conduit statistics.txt
            $table->text('mxrougs')->nullable(); //Conduit statistics.txt 
            $table->text('mnrougs')->nullable();//Conduit statistics.txt
            $table->text('mxenlefs')->nullable();  //Conduit statistics.txt
            $table->text('mienlefs')->nullable();//Conduit statistics.txt
            $table->text('mxeloefs')->nullable(); //Conduit statistics.txt
            $table->text('mneloefs')->nullable();  //Conduit statistics.txt
            $table->text('mxaglefs')->nullable();  //Conduit statistics.txt
            $table->text('miaglefs')->nullable(); //Conduit statistics.txt
            $table->text('mxleths')->nullable();//Conduit statistics.txt
            $table->text('mileths')->nullable();//Conduit statistics.txt
            $table->text('totallgth')->nullable(); //Conduit statistics.txt
            $table->text('mxslope')->nullable();//Conduit statistics.txt
            $table->text('mislope')->nullable(); //Conduit statistics.txt
            $table->text('dryweaflow')->nullable();  //Flow routing continuity
            $table->text('wetweaflow')->nullable();  //Flow routing continuity
            $table->text('groundweaflow')->nullable();//Flow routing continuity
            $table->text('rdiiflow')->nullable();//Flow routing continuity
            $table->text('exnalflow')->nullable();//Flow routing continuity
            $table->text('exnaloutflow')->nullable();//Flow routing continuity
            $table->text('floodloss')->nullable();//Flow routing continuity
            $table->text('evaloss')->nullable();// Flow routing continuity
            $table->text('exfiltionloss')->nullable();//Flow routing continuity
            $table->text('lnitialvols')->nullable();// Flow routing continuity
            $table->text('finalvols')->nullable();// Flow routing continuity
            $table->text('conerrors')->nullable();// Flow routing continuity
            $table->text('timeflows')->nullable();//Inflows
            $table->text('dryweaflows')->nullable();//Inflows
            $table->text('groundflows')->nullable();//Inflows
            $table->text('rdiiflows')->nullable();//Inflows
            $table->text('subments')->nullable();//Model complexity
            $table->text('grounwter')->nullable();//Model complexity
            $table->text('complexity_aquifers')->nullable();//Model complexity
            $table->text('complexity_snows')->nullable();//Model complexity
            $table->text('complexity_rdiigraphs')->nullable();//Model complexity
            $table->text('complexity_jundes')->nullable();//Model complexity
            $table->text('complexity_outdes')->nullable();//Model complexity
            $table->text('complexity_fldides')->nullable();//Model complexity
            $table->text('complexity_storaundes')->nullable();//Model complexity
            $table->text('complexity_conlinks')->nullable();//Model complexity
            $table->text('complexity_pumplinks')->nullable();//Model complexity
            $table->text('complexity_oriflinks')->nullable();//Model complexity
            $table->text('complexity_weirlinks')->nullable();//Model complexity
            $table->text('complexity_outlinks')->nullable();//Model complexity
            $table->text('complexity_transect')->nullable();//Model complexity
            $table->text('complexity_polluts')->nullable();//Model complexity
            $table->text('complexity_landus')->nullable();//Model complexity
            $table->text('totalcomity')->nullable();//Model complexity
            $table->text('raings')->nullable();//Model inventory
            $table->text('inventory_subments')->nullable();//Model inventory
            $table->text('inventory_aquifers')->nullable();//Model inventory
            $table->text('inventory_snows')->nullable();//Model inventory
            $table->text('inventory_rdiigraphs')->nullable();//Model inventory
            $table->text('inventory_jundes')->nullable();//Model inventory
            $table->text('inventory_outdes')->nullable();//Model inventory
            $table->text('inventory_fldides')->nullable();//Model inventory
            $table->text('inventory_storaundes')->nullable();//Model inventory
            $table->text('inventory_conlinks')->nullable();//Model inventory
            $table->text('inventory_pumplinks')->nullable();//Model inventory
            $table->text('inventory_oriflinks')->nullable();//Model inventory
            $table->text('inventory_weirlinks')->nullable();//Model inventory
            $table->text('inventory_outlinks')->nullable();//Model inventory
            $table->text('inventory_treunits')->nullable();//Model inventory
            $table->text('inventory_transect')->nullable();//Model inventory
            $table->text('inventory_conruls')->nullable();//Model inventory
            $table->text('inventory_polluts')->nullable();//Model inventory
            $table->text('inventory_landus')->nullable();//Model inventory
            $table->text('conves')->nullable();//Model inventory
            $table->text('divsionves')->nullable();//Model inventory
            $table->text('pumpves')->nullable();//Model inventory
            $table->text('ratingves')->nullable();//Model inventory
            $table->text('shapeves')->nullable();//Model inventory
            $table->text('strogves')->nullable();//Model inventory
            $table->text('tidalves')->nullable();//Model inventory
            $table->text('weirves')->nullable();//Model inventory
            $table->text('timeseries')->nullable();//Model inventory
            $table->text('timepatns')->nullable();//Model inventory
            $table->text('mxgroudev')->nullable();//Node statistics
            $table->text('mngroudev')->nullable();//Node statistics
            $table->text('mxvertev')->nullable();//Node statistics
            $table->text('mnvertev')->nullable();//Node statistics
            $table->text('mxdepth')->nullable();//Node statistics
            $table->text('midepth')->nullable();//Node statistics
            $table->text('flowunits')->nullable();//Options
            $table->text('inftionmet')->nullable();//Options
            $table->text('flowtingmet')->nullable();//Options
            $table->text('linkoffsetsned')->nullable();//Options
            $table->text('allowding')->nullable();//Options
            $table->text('skipflowds')->nullable();//Options
            $table->text('inertialing')->nullable();//Options
            $table->text('defineflow')->nullable();//Options
            $table->text('forcetion')->nullable();//Options
            $table->text('variable')->nullable();//Options
            $table->text('adjustment')->nullable();//Options
            $table->text('conduit')->nullable();//Options
            $table->text('surface')->nullable();//Options
            $table->text('startingdate')->nullable();//Options
            $table->text('endingdate')->nullable();//Options
            $table->text('duration')->nullable();//Options
            $table->text('antecedent')->nullable();//Options
            $table->text('rain')->nullable();//Options
            $table->text('reporttime')->nullable();//Options
            $table->text('wettime')->nullable();//Options
            $table->text('drytime')->nullable();//Options
            $table->text('routingtime')->nullable();//Options
            $table->text('minimumtime')->nullable();//Options
            $table->text('avgtime')->nullable();//Options
            $table->text('minimumcons')->nullable();//Options
            $table->text('lgnoreofs')->nullable();//Options
            $table->text('lgnoremelt')->nullable();//Options
            $table->text('lgnoreter')->nullable();//Options
            $table->text('lgnoreing')->nullable();//Options
            $table->text('lgnorety')->nullable();//Options
            $table->text('reportavgs')->nullable();//Options
            $table->text('mxpipeter')->nullable();//Pipe inventory
            $table->text('mnpipditer')->nullable();//Pipe inventory
            $table->text('totalpipeth')->nullable();//Pipe inventory
            $table->text('totalotherth')->nullable();//Pipe inventory
            $table->text('totalpipth')->nullable();//Pipe inventory
            $table->text('maxmg')->nullable();//Results statistics
            $table->text('maxcfs')->nullable();//Results statistics
            $table->text('maxcoeffnt')->nullable();//Results statistics
            $table->text('maxin')->nullable();//Results statistics
            $table->text('minin')->nullable();//Results statistics
            $table->text('mxnode')->nullable();//Results statistics
            $table->text('surcharged')->nullable();//Results statistics
            $table->text('nodesurched')->nullable();//Results statistics
            $table->text('maxcrown')->nullable();//Results statistics
            $table->text('minbelow')->nullable();//Results statistics
            $table->text('flooded')->nullable();//Results statistics
            $table->text('flooding')->nullable();//Results statistics
            $table->text('floodmg')->nullable();//Results statistics
            $table->text('pondedvolume')->nullable();//Results statistics
            $table->text('maxvolume')->nullable();//Results statistics
            $table->text('maxperfull')->nullable();//Results statistics
            $table->text('maxfrecy')->nullable();//Results statistics
            $table->text('maxflow')->nullable();//Results statistics
            $table->text('maxoutfallmg')->nullable();//Results statistics
            $table->text('totalmg')->nullable();//Results statistics
            $table->text('maxpeak')->nullable();//Results statistics
            $table->text('maxlinkty')->nullable();//Results statistics
            $table->text('minpeakty')->nullable();//Results statistics
            $table->text('conduits')->nullable();//Results statistics
            $table->text('maxconduits')->nullable();//Results statistics
            $table->text('maxcapacity')->nullable();//Results statistics
            $table->text('lidstroage')->nullable();//Runoff quantity continuity
            $table->text('snowcover')->nullable();//Runoff quantity continuity
            $table->text('totalin')->nullable();//Runoff quantity continuity
            $table->text('runonin')->nullable();//Runoff quantity continuity
            $table->text('evalossin')->nullable();//Runoff quantity continuity
            $table->text('infitionloss')->nullable();//Runoff quantity continuity
            $table->text('surfacein')->nullable();//Runoff quantity continuity
            $table->text('drainage')->nullable();//Runoff quantity continuity
            $table->text('snowved')->nullable();//Runoff quantity continuity
            $table->text('finalsnow')->nullable();//Runoff quantity continuity
            $table->text('finalin')->nullable();//Runoff quantity continuity
            $table->text('conerror')->nullable();//Runoff quantity continuity
            $table->text('maxwidth')->nullable();//Subcatchment statistics
            $table->text('minwidth')->nullable();//Subcatchment statistics
            $table->text('maxarea')->nullable();//Subcatchment statistics
            $table->text('minarea')->nullable();//Subcatchment statistics
            $table->text('totalarea')->nullable();//Subcatchment statistics
            $table->text('results_maxflow')->nullable();//Subcatchment statistics
            $table->text('minflow')->nullable();//Subcatchment statistics
            $table->text('maxslope')->nullable();//Subcatchment statistics
            $table->text('minslope')->nullable();//Subcatchment statistics
            $table->text('subcat_maximpness')->nullable();//Subcatchment statistics
            $table->text('subcat_minimpness')->nullable();//Subcatchment statistics
            $table->text('maximpness')->nullable();//Subcatchment statistics
            $table->text('minimpness')->nullable();//Subcatchment statistics
            $table->text('subcat_maxperv')->nullable();//Subcatchment statistics
            $table->text('subcat_minperv')->nullable();//Subcatchment statistics
            $table->text('maximp')->nullable();//Unused objects
            $table->text('minimp')->nullable();//Unused objects
            $table->text('maxperv')->nullable();//Unused objects
            $table->text('minperv')->nullable();//Unused objects
            $table->text('gages')->nullable();//Unused objects
            $table->text('aquifers')->nullable();//Unused objects
            $table->text('snowpacks')->nullable();//Unused objects
            $table->text('unitgraphs')->nullable();//Unused objects
            $table->text('transects')->nullable();//Unused objects
            $table->text('curves')->nullable();//Unused objects
            $table->text('diverves')->nullable();//Unused objects
            $table->text('unused_pumpves')->nullable();//Unused objects
            $table->text('unused_ratingves')->nullable();//Unused objects
            $table->text('unused_shapeves')->nullable();//Unused objects
            $table->text('storageves')->nullable();//Unused objects
            $table->text('unused_tidalves')->nullable();//Unused objects
            $table->text('unused_weirves')->nullable();//Unused objects
            $table->text('unused_timeseries')->nullable();//Unused objects
            $table->text('timepatts')->nullable();//Unused objects
            $table->text('invertevsJ1')->nullable();//Junctions Flood.txt
            $table->text('invertevsJ2')->nullable();//Junctions Flood.txt
            $table->text('invertevsJ3')->nullable();//Junctions Flood.txt
            $table->text('invertevsJ4')->nullable();//Junctions Flood.txt
            $table->text('invertevsJ3_1')->nullable();//Junctions Flood.txt
            $table->text('invertevsJ3_2')->nullable();//Junctions Flood.txt
            $table->text('rimJ1')->nullable();//Junctions Flood.txt
            $table->text('rimJ2')->nullable();//Junctions Flood.txt
            $table->text('rimJ3')->nullable();//Junctions Flood.txt
            $table->text('rimJ4')->nullable();//Junctions Flood.txt
            $table->text('rimJ3_1')->nullable();//Junctions Flood.txt
            $table->text('rimJ3_2')->nullable();//Junctions Flood.txt
            $table->text('totalmgJ1')->nullable();//Junctions Flood.txt
            $table->text('totalmgJ2')->nullable();//Junctions Flood.txt
            $table->text('totalmgJ3')->nullable();//Junctions Flood.txt
            $table->text('totalmgJ4')->nullable();//Junctions Flood.txt
            $table->text('totalmgJ3_1')->nullable();//Junctions Flood.txt
            $table->text('totalmgJ3_2')->nullable();//Junctions Flood.txt
            $table->text('report_generate')->nullable();//test.html
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
