<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class appointmentController extends Controller
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
        return view('appointment.create')->with('customers' , $customers);
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
            'customer_id' => 'required|int',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'description' => 'required|string|min:50'
        ]);

        $appointment = new \App\Appointment();
        $appointment->customer_id = $request->customer_id;
        $appointment->date_of_action = Now();
        $appointment->description = $request->description;
        $appointment->next_action = $request->date . ' ' . $request->time;
        $appointment->created_at = Now();
        $appointment->updated_at = Now();
        $appointment->save();

        return back()->with('success', 'Appointment added successfully');
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
