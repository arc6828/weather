<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Staffgauge;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\User;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
        $location = Location::where('address', 'LIKE', "%$keyword%")
                        ->orWhere('msglocid', 'LIKE', "%$keyword%")
                        ->orWhere('latitude', 'LIKE', "%$keyword%")
                        ->orWhere('longitude', 'LIKE', "%$keyword%")
                        ->orWhere('typegroup', 'LIKE', "%$keyword%")
                        ->orWhere('lineid', 'LIKE', "%$keyword%")
                        ->orWhere('user_id', 'LIKE', "%$keyword%")
                        ->orWhere('staffgaugeid', 'LIKE', "%$keyword%")
                        ->latest()->paginate($perPage);
                    } else {
                    $location = Location::latest()->paginate($perPage);
                }

        return view('location.index', compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        Location::create($requestData);

        return redirect('location')->with('flash_message', 'Location added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::findOrFail($id);

        return view('location.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::findOrFail($id);

        return view('location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();

        $location = Ocr::findOrFail($id);
        
        $location->update($requestData);

        return redirect('location')->with('flash_message', 'Location updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Location::destroy($id);

        return redirect('location')->with('flash_message', 'Location deleted!');
    }
}
