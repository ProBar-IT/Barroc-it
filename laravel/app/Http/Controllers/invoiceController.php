<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class invoiceController extends Controller
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
        $projects = \App\Project::all();
        return view('invoice.create')->with('projects', $projects);
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
            'project_id' => 'required|int|min:1',
            'description' => 'required|string|min:10',
            'price' => 'required|numeric|min:3',
            'status' => 'required|int',
        ]);

        $invoice = new \App\Invoice();
        $invoice->project_id = $request->project_id;
        $invoice->description = $request->description;
        $invoice->price = $request->price;
        $invoice->date_of_sending = now();
        $invoice->status = $request->status;
        $invoice->created_at = now();
        $invoice->updated_at = now();
        $invoice->save();

        return back()->with('success', 'Your invoice has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = \App\Invoice::find($id);

        return view('invoice.show')->with('invoice', $invoice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = \App\Invoice::find($id);

        return view('invoice.edit')->with('invoice',$invoice);
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
            'project_id' => 'required|int|min:1',
            'description' => 'required|string|min:20',
            'invoice_price' => 'required|int|min:3',
            'payed_status' => 'required',
        ]);

        $invoice = Invoice::find($id);
        $invoice->project_id = $request->project_id;
        $invoice->description = $request->description;
        $invoice->price = $request->invoice_price;
        $invoice->status = $request->payed_status;
        if (isset($request->invoice_send))
        {
            $invoice->date_of_sending = $request->invoice_send;
        }
        $invoice->created_at = now();
        $invoice->updated_at = now();
        $invoice->save();

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
