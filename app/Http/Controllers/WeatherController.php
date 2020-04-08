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
        
        //BASE OBJECT 
        $base_object = json_decode(file_get_contents(url('detail.json')));
        //COPY DETAIL OBJECT
        $large_object = json_decode($weather->detail);         
        //CLEAR DETAIL
        $weather->detail = "";
        //COPY MAIN OBJECT
        $small_object = json_decode(json_encode($weather));
        //MERGE DETAIL AND MAIN
        $weather = (object) array_merge((array) $base_object, (array) $small_object, (array) $large_object ); 
        
        

        return view('weather.show', compact('weather'));
    }

    public function show_latest()
    {
        $weather = Weather::latest()->firstOrFail();;
        //BASE OBJECT 
        $base_object = json_decode(file_get_contents(url('detail.json')));
        //COPY DETAIL OBJECT
        $large_object = json_decode($weather->detail);         
        //CLEAR DETAIL
        $weather->detail = "";
        //COPY MAIN OBJECT
        $small_object = json_decode(json_encode($weather));
        //MERGE DETAIL AND MAIN
        $weather = (object) array_merge((array) $base_object, (array) $small_object, (array) $large_object['detail'] ); 
        

        return view('weather.show', compact('weather','base_object','small_object','large_object'));
    }

    public function show_test()
    {
        $weather = Weather::latest()->firstOrFail();;
        //BASE OBJECT 
        $base_object = json_decode(file_get_contents(url('detail.json')));
        //COPY DETAIL OBJECT
        $large_object = json_decode($weather->detail);         
        //CLEAR DETAIL
        $weather->detail = "";
        //COPY MAIN OBJECT
        $small_object = json_decode(json_encode($weather));
        //MERGE DETAIL AND MAIN
        $weather = (object) array_merge((array) $base_object, (array) $large_object , (array) $small_object); 
        

        return view('weather.show-test', compact('weather'));
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

        
        //COPY DETAIL OBJECT
        $large_object = json_decode($weather->detail);         
        //CLEAR DETAIL
        $weather->detail = "";
        //COPY MAIN OBJECT
        $small_object = json_decode(json_encode($weather));
        //MERGE DETAIL AND MAIN
        $weather = (object) array_merge( (array) $large_object , (array) $small_object); 

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
        if ($request->hasFile('profiles2')) {
            $requestData['profiles2'] = $request->file('profiles2')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('profiles3')) {
            $requestData['profiles3'] = $request->file('profiles3')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('profiles4')) {
            $requestData['profiles4'] = $request->file('profiles4')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('profiles5')) {
            $requestData['profiles5'] = $request->file('profiles5')
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
