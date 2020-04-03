<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Location;
use App\Staffgauge;
use App\Charts\UserChart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use FarhanWazir\GoogleMaps\Facades\GMapsFacade;
use Khill\Lavacharts\Laravel\Lava;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $requestData = $request->all();
        // Staffgauge::findOrFail();

        // --------------------------------------

        // $lava = new Lavacharts; // See note below for Laravel

        /*
        $votes  = Lava::DataTable();

        $votes->addStringColumn('Food Poll')
            ->addNumberColumn('Votes')
            ->addRow(['Tacos',  rand(1000,5000)])
            ->addRow(['Salad',  rand(1000,5000)])
            ->addRow(['Pizza',  rand(1000,5000)])
            ->addRow(['Apples', rand(1000,5000)])
            ->addRow(['Fish',   rand(1000,5000)]);

        Lava::BarChart('Votes', $votes);
        */

        /*
        $usersChart = new UserChart;
        $usersChart->labels(['Jan', 'Feb', 'Mar']);
        $usersChart->dataset('Users by trimester', 'line', [10, 25, 13])
            ->color("rgb(255, 99, 132)")
            ->backgroundcolor("rgb(255, 99, 132)");
        // return view('users', [ 'usersChart' => $usersChart ] );
        */

        return view('dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
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
        
    }
}
