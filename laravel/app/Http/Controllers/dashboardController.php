<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects           = \App\Project::all();
        $projects_not       = \App\Project::where('status', 0)->get();
        $projects_star      = \App\Project::where('status', 1)->get();
        $projects_fin       = \App\Project::where('status', 2)->get();
        $customers          = \App\Customer::all();
        $cu_credit          = \App\Customer::where('creditworthy', 1)->get();
        $cu_not_credit      = \App\Customer::where('creditworthy', 0)->get();
        $appointments       = \App\Appointment::all();
        $appointments_new   = \App\Appointment::where('next_action', '>', Carbon::now())->orderBy('next_action', 'asc')->get();

        return view('dashboard')
            ->with('projects' , $projects)
            ->with('projects_not', $projects_not)
            ->with('projects_star', $projects_star)
            ->with('projects_fin', $projects_fin)
            ->with('customers' , $customers)
            ->with('cu_credit' , $cu_credit)
            ->with('cu_not_credit' , $cu_not_credit)
            ->with('appointments' , $appointments)
            ->with('appointments_new', $appointments_new);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
