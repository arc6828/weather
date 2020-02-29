<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Weather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $weather = Weather::where('Outfalls', 'LIKE', "%$keyword%")
                ->orWhere('kmls', 'LIKE', "%$keyword%")
                ->orWhere('profiles', 'LIKE', "%$keyword%")
                ->orWhere('circular', 'LIKE', "%$keyword%")
                ->orWhere('mxrougs', 'LIKE', "%$keyword%")
                ->orWhere('mnrougs', 'LIKE', "%$keyword%")
                ->orWhere('mxenlefs', 'LIKE', "%$keyword%")
                ->orWhere('mienlefs', 'LIKE', "%$keyword%")
                ->orWhere('mxeloefs', 'LIKE', "%$keyword%")
                ->orWhere('mneloefs', 'LIKE', "%$keyword%")
                ->orWhere('mxaglefs', 'LIKE', "%$keyword%")
                ->orWhere('miaglefs', 'LIKE', "%$keyword%")
                ->orWhere('mxleths', 'LIKE', "%$keyword%")
                ->orWhere('mileths', 'LIKE', "%$keyword%")
                ->orWhere('totallgth', 'LIKE', "%$keyword%")
                ->orWhere('mxslope', 'LIKE', "%$keyword%")
                ->orWhere('mislope', 'LIKE', "%$keyword%")
                ->orWhere('dryweaflow', 'LIKE', "%$keyword%")
                ->orWhere('wetweaflow', 'LIKE', "%$keyword%")
                ->orWhere('groundweaflow', 'LIKE', "%$keyword%")
                ->orWhere('rdiiflow', 'LIKE', "%$keyword%")
                ->orWhere('exnalflow', 'LIKE', "%$keyword%")
                ->orWhere('exnaloutflow', 'LIKE', "%$keyword%")
                ->orWhere('floodloss', 'LIKE', "%$keyword%")
                ->orWhere('evaloss', 'LIKE', "%$keyword%")
                ->orWhere('exfiltionloss', 'LIKE', "%$keyword%")
                ->orWhere('lnitialvols', 'LIKE', "%$keyword%")
                ->orWhere('finalvols', 'LIKE', "%$keyword%")
                ->orWhere('conerrors', 'LIKE', "%$keyword%")
                ->orWhere('timeflows', 'LIKE', "%$keyword%")
                ->orWhere('dryweaflows', 'LIKE', "%$keyword%")
                ->orWhere('groundflows', 'LIKE', "%$keyword%")
                ->orWhere('rdiiflows', 'LIKE', "%$keyword%")
                ->orWhere('subments', 'LIKE', "%$keyword%")
                ->orWhere('grounwter', 'LIKE', "%$keyword%")
                ->orWhere('complexity_aquifers', 'LIKE', "%$keyword%")
                ->orWhere('complexity_snows', 'LIKE', "%$keyword%")
                ->orWhere('complexity_rdiigraphs', 'LIKE', "%$keyword%")
                ->orWhere('complexity_jundes', 'LIKE', "%$keyword%")
                ->orWhere('complexity_outdes', 'LIKE', "%$keyword%")
                ->orWhere('complexity_fldides', 'LIKE', "%$keyword%")
                ->orWhere('complexity_storaundes', 'LIKE', "%$keyword%")
                ->orWhere('complexity_conlinks', 'LIKE', "%$keyword%")
                ->orWhere('complexity_pumplinks', 'LIKE', "%$keyword%")
                ->orWhere('complexity_oriflinks', 'LIKE', "%$keyword%")
                ->orWhere('complexity_weirlinks', 'LIKE', "%$keyword%")
                ->orWhere('complexity_outlinks', 'LIKE', "%$keyword%")
                ->orWhere('complexity_transect', 'LIKE', "%$keyword%")
                ->orWhere('complexity_polluts', 'LIKE', "%$keyword%")
                ->orWhere('complexity_landus', 'LIKE', "%$keyword%")
                ->orWhere('totalcomity', 'LIKE', "%$keyword%")
                ->orWhere('raings', 'LIKE', "%$keyword%")
                ->orWhere('inventory_subments', 'LIKE', "%$keyword%")
                ->orWhere('inventory_aquifers', 'LIKE', "%$keyword%")
                ->orWhere('inventory_snows', 'LIKE', "%$keyword%")
                ->orWhere('inventory_rdiigraphs', 'LIKE', "%$keyword%")
                ->orWhere('inventory_jundes', 'LIKE', "%$keyword%")
                ->orWhere('inventory_outdes', 'LIKE', "%$keyword%")
                ->orWhere('inventory_fldides', 'LIKE', "%$keyword%")
                ->orWhere('inventory_storaundes', 'LIKE', "%$keyword%")
                ->orWhere('inventory_conlinks', 'LIKE', "%$keyword%")
                ->orWhere('inventory_pumplinks', 'LIKE', "%$keyword%")
                ->orWhere('inventory_oriflinks', 'LIKE', "%$keyword%")
                ->orWhere('inventory_weirlinks', 'LIKE', "%$keyword%")
                ->orWhere('inventory_outlinks', 'LIKE', "%$keyword%")
                ->orWhere('inventory_treunits', 'LIKE', "%$keyword%")
                ->orWhere('inventory_transect', 'LIKE', "%$keyword%")
                ->orWhere('inventory_conruls', 'LIKE', "%$keyword%")
                ->orWhere('inventory_polluts', 'LIKE', "%$keyword%")
                ->orWhere('inventory_landus', 'LIKE', "%$keyword%")
                ->orWhere('conves', 'LIKE', "%$keyword%")
                ->orWhere('divsionves', 'LIKE', "%$keyword%")
                ->orWhere('pumpves', 'LIKE', "%$keyword%")
                ->orWhere('ratingves', 'LIKE', "%$keyword%")
                ->orWhere('shapeves', 'LIKE', "%$keyword%")
                ->orWhere('strogves', 'LIKE', "%$keyword%")
                ->orWhere('tidalves', 'LIKE', "%$keyword%")
                ->orWhere('weirves', 'LIKE', "%$keyword%")
                ->orWhere('timeseries', 'LIKE', "%$keyword%")
                ->orWhere('timepatns', 'LIKE', "%$keyword%")
                ->orWhere('mxgroudev', 'LIKE', "%$keyword%")
                ->orWhere('mngroudev', 'LIKE', "%$keyword%")
                ->orWhere('mxvertev', 'LIKE', "%$keyword%")
                ->orWhere('mnvertev', 'LIKE', "%$keyword%")
                ->orWhere('mxdepth', 'LIKE', "%$keyword%")
                ->orWhere('midepth', 'LIKE', "%$keyword%")
                ->orWhere('flowunits', 'LIKE', "%$keyword%")
                ->orWhere('inftionmet', 'LIKE', "%$keyword%")
                ->orWhere('flowtingmet', 'LIKE', "%$keyword%")
                ->orWhere('linkoffsetsned', 'LIKE', "%$keyword%")
                ->orWhere('allowding', 'LIKE', "%$keyword%")
                ->orWhere('skipflowds', 'LIKE', "%$keyword%")
                ->orWhere('inertialing', 'LIKE', "%$keyword%")
                ->orWhere('defineflow', 'LIKE', "%$keyword%")
                ->orWhere('forcetion', 'LIKE', "%$keyword%")
                ->orWhere('variable', 'LIKE', "%$keyword%")
                ->orWhere('adjustment', 'LIKE', "%$keyword%")
                ->orWhere('conduit', 'LIKE', "%$keyword%")
                ->orWhere('surface', 'LIKE', "%$keyword%")
                ->orWhere('startingdate', 'LIKE', "%$keyword%")
                ->orWhere('endingdate', 'LIKE', "%$keyword%")
                ->orWhere('duration', 'LIKE', "%$keyword%")
                ->orWhere('antecedent', 'LIKE', "%$keyword%")
                ->orWhere('rain', 'LIKE', "%$keyword%")
                ->orWhere('reporttime', 'LIKE', "%$keyword%")
                ->orWhere('wettime', 'LIKE', "%$keyword%")
                ->orWhere('drytime', 'LIKE', "%$keyword%")
                ->orWhere('routingtime', 'LIKE', "%$keyword%")
                ->orWhere('minimumtime', 'LIKE', "%$keyword%")
                ->orWhere('avgtime', 'LIKE', "%$keyword%")
                ->orWhere('minimumcons', 'LIKE', "%$keyword%")
                ->orWhere('lgnoreofs', 'LIKE', "%$keyword%")
                ->orWhere('lgnoremelt', 'LIKE', "%$keyword%")
                ->orWhere('lgnoreter', 'LIKE', "%$keyword%")
                ->orWhere('lgnoreing', 'LIKE', "%$keyword%")
                ->orWhere('lgnorety', 'LIKE', "%$keyword%")
                ->orWhere('reportavgs', 'LIKE', "%$keyword%")
                ->orWhere('mxpipeter', 'LIKE', "%$keyword%")
                ->orWhere('mnpipditer', 'LIKE', "%$keyword%")
                ->orWhere('totalpipeth', 'LIKE', "%$keyword%")
                ->orWhere('totalotherth', 'LIKE', "%$keyword%")
                ->orWhere('totalpipth', 'LIKE', "%$keyword%")
                ->orWhere('maxmg', 'LIKE', "%$keyword%")
                ->orWhere('maxcfs', 'LIKE', "%$keyword%")
                ->orWhere('maxcoeffnt', 'LIKE', "%$keyword%")
                ->orWhere('maxin', 'LIKE', "%$keyword%")
                ->orWhere('minin', 'LIKE', "%$keyword%")
                ->orWhere('mxnode', 'LIKE', "%$keyword%")
                ->orWhere('surcharged', 'LIKE', "%$keyword%")
                ->orWhere('nodesurched', 'LIKE', "%$keyword%")
                ->orWhere('maxcrown', 'LIKE', "%$keyword%")
                ->orWhere('minbelow', 'LIKE', "%$keyword%")
                ->orWhere('flooded', 'LIKE', "%$keyword%")
                ->orWhere('flooding', 'LIKE', "%$keyword%")
                ->orWhere('floodmg', 'LIKE', "%$keyword%")
                ->orWhere('pondedvolume', 'LIKE', "%$keyword%")
                ->orWhere('maxvolume', 'LIKE', "%$keyword%")
                ->orWhere('maxperfull', 'LIKE', "%$keyword%")
                ->orWhere('maxfrecy', 'LIKE', "%$keyword%")
                ->orWhere('maxflow', 'LIKE', "%$keyword%")
                ->orWhere('maxoutfallmg', 'LIKE', "%$keyword%")
                ->orWhere('totalmg', 'LIKE', "%$keyword%")
                ->orWhere('maxpeak', 'LIKE', "%$keyword%")
                ->orWhere('maxlinkty', 'LIKE', "%$keyword%")
                ->orWhere('minpeakty', 'LIKE', "%$keyword%")
                ->orWhere('conduits', 'LIKE', "%$keyword%")
                ->orWhere('maxconduits', 'LIKE', "%$keyword%")
                ->orWhere('maxcapacity', 'LIKE', "%$keyword%")
                ->orWhere('lidstroage', 'LIKE', "%$keyword%")
                ->orWhere('snowcover', 'LIKE', "%$keyword%")
                ->orWhere('totalin', 'LIKE', "%$keyword%")
                ->orWhere('runonin', 'LIKE', "%$keyword%")
                ->orWhere('evalossin', 'LIKE', "%$keyword%")
                ->orWhere('infitionloss', 'LIKE', "%$keyword%")
                ->orWhere('surfacein', 'LIKE', "%$keyword%")
                ->orWhere('drainage', 'LIKE', "%$keyword%")
                ->orWhere('snowved', 'LIKE', "%$keyword%")
                ->orWhere('finalsnow', 'LIKE', "%$keyword%")
                ->orWhere('finalin', 'LIKE', "%$keyword%")
                ->orWhere('conerror', 'LIKE', "%$keyword%")
                ->orWhere('maxwidth', 'LIKE', "%$keyword%")
                ->orWhere('minwidth', 'LIKE', "%$keyword%")
                ->orWhere('maxarea', 'LIKE', "%$keyword%")
                ->orWhere('minarea', 'LIKE', "%$keyword%")
                ->orWhere('totalarea', 'LIKE', "%$keyword%")
                ->orWhere('results_maxflow', 'LIKE', "%$keyword%")
                ->orWhere('minflow', 'LIKE', "%$keyword%")
                ->orWhere('maxslope', 'LIKE', "%$keyword%")
                ->orWhere('minslope', 'LIKE', "%$keyword%")
                ->orWhere('subcat_maximpness', 'LIKE', "%$keyword%")
                ->orWhere('subcat_minimpness', 'LIKE', "%$keyword%")
                ->orWhere('maximpness', 'LIKE', "%$keyword%")
                ->orWhere('minimpness', 'LIKE', "%$keyword%")
                ->orWhere('subcat_maxperv', 'LIKE', "%$keyword%")
                ->orWhere('subcat_minperv', 'LIKE', "%$keyword%")
                ->orWhere('maximp', 'LIKE', "%$keyword%")
                ->orWhere('minimp', 'LIKE', "%$keyword%")
                ->orWhere('maxperv', 'LIKE', "%$keyword%")
                ->orWhere('minperv', 'LIKE', "%$keyword%")
                ->orWhere('gages', 'LIKE', "%$keyword%")
                ->orWhere('aquifers', 'LIKE', "%$keyword%")
                ->orWhere('snowpacks', 'LIKE', "%$keyword%")
                ->orWhere('unitgraphs', 'LIKE', "%$keyword%")
                ->orWhere('transects', 'LIKE', "%$keyword%")
                ->orWhere('curves', 'LIKE', "%$keyword%")
                ->orWhere('diverves', 'LIKE', "%$keyword%")
                ->orWhere('unused_pumpves', 'LIKE', "%$keyword%")
                ->orWhere('unused_ratingves', 'LIKE', "%$keyword%")
                ->orWhere('unused_shapeves', 'LIKE', "%$keyword%")
                ->orWhere('storageves', 'LIKE', "%$keyword%")
                ->orWhere('unused_tidalves', 'LIKE', "%$keyword%")
                ->orWhere('unused_weirves', 'LIKE', "%$keyword%")
                ->orWhere('unused_timeseries', 'LIKE', "%$keyword%")
                ->orWhere('timepatts', 'LIKE', "%$keyword%")
                ->orWhere('invertevsJ1', 'LIKE', "%$keyword%")
                ->orWhere('invertevsJ2', 'LIKE', "%$keyword%")
                ->orWhere('invertevsJ3', 'LIKE', "%$keyword%")
                ->orWhere('invertevsJ4', 'LIKE', "%$keyword%")
                ->orWhere('invertevsJ3_1', 'LIKE', "%$keyword%")
                ->orWhere('invertevsJ3_2', 'LIKE', "%$keyword%")
                ->orWhere('rimJ1', 'LIKE', "%$keyword%")
                ->orWhere('rimJ2', 'LIKE', "%$keyword%")
                ->orWhere('rimJ3', 'LIKE', "%$keyword%")
                ->orWhere('rimJ4', 'LIKE', "%$keyword%")
                ->orWhere('rimJ3_1', 'LIKE', "%$keyword%")
                ->orWhere('rimJ3_2', 'LIKE', "%$keyword%")
                ->orWhere('totalmgJ1', 'LIKE', "%$keyword%")
                ->orWhere('totalmgJ2', 'LIKE', "%$keyword%")
                ->orWhere('totalmgJ3', 'LIKE', "%$keyword%")
                ->orWhere('totalmgJ4', 'LIKE', "%$keyword%")
                ->orWhere('totalmgJ3_1', 'LIKE', "%$keyword%")
                ->orWhere('totalmgJ3_2', 'LIKE', "%$keyword%")
                ->orWhere('report_generate', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $weather = Weather::latest()->paginate($perPage);
        }

        return view('weather.index', compact('weather'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('weather.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('Outfalls')) {
            $requestData['Outfalls'] = $request->file('Outfalls')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('kmls')) {
            $requestData['kmls'] = $request->file('kmls')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('profiles')) {
            $requestData['profiles'] = $request->file('profiles')
                ->store('uploads', 'public');
        }

        Weather::create($requestData);

        return redirect('weather')->with('flash_message', 'Weather added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $weather = Weather::findOrFail($id);

        return view('weather.show', compact('weather'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $weather = Weather::findOrFail($id);

        return view('weather.edit', compact('weather'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('Outfalls')) {
            $requestData['Outfalls'] = $request->file('Outfalls')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('kmls')) {
            $requestData['kmls'] = $request->file('kmls')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('profiles')) {
            $requestData['profiles'] = $request->file('profiles')
                ->store('uploads', 'public');
        }

        $weather = Weather::findOrFail($id);
        $weather->update($requestData);

        return redirect('weather')->with('flash_message', 'Weather updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Weather::destroy($id);

        return redirect('weather')->with('flash_message', 'Weather deleted!');
    }
}
