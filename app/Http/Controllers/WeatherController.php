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
                ->orWhere('detail', 'LIKE', "%$keyword%")
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
        $requestData['detail'] = json_encode($requestData, JSON_UNESCAPED_UNICODE);
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
        $requestData['detail'] = json_encode($requestData, JSON_UNESCAPED_UNICODE);
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
