<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = \App\Customer::all();
        return view('project.create')->with('customers', $customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required|int|min:1',
            'project_name' => 'required|string|min:5',
            'description' => 'required|string|min:50',
            'status' => 'required|int',
            'maintenance' => 'required|int',
            'applications' => 'required|string',
            'hardware' => 'required|string',
            'operating_system' => 'required|string|min:3',
            'internal_cp' => 'required|string|min:3',
        ]);

        $project = new \App\Project();
        $project->customer_id = $request->customer_id;
        $project->name = $request->project_name;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->maintained_contract = $request->maintenance;
        $project->applications = $request->applications;
        $project->hardware = $request->hardware;
        $project->operating_system = $request->operating_system;
        $project->appointments = now();
        $project->internal_cp = $request->internal_cp;
        $project->created_at = now();
        $project->updated_at = now();
        $project->save();

        return back()->with('success', 'Project added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = \App\Project::find($id);

        return view('project.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = \App\Project::find($id);

        return view('project.edit')->with('project' , $project);
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
        $this->validate($request, [
            'project_name' => 'required|string|min:5',
            'description' => 'required|string|min:50',
            'project_applications' => 'required|string',
            'project_hardware' => 'required|string',
            'project_system' => 'required|string|min:3',
            'internal_cp' => 'required|string|min:3',
        ]);

        $project = Project::find($id);
        $project->name = $request->project_name;
        $project->description = $request->description;
        $project->applications = $request->project_applications;
        $project->hardware = $request->project_hardware;
        $project->operating_system = $request->project_system;
        $project->appointments = now();
        $project->internal_cp = $request->internal_cp;
        $project->created_at = now();
        $project->updated_at = now();
        if (isset($request->payed_status))
        {
            $project->status = $request->payed_status;
        }
        if (isset($request->maintenance))
        {
            $project->maintained_contract = $request->maintenance;
        }
        $project->save();

        return back()->with('success', 'Project successfully edited');
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
