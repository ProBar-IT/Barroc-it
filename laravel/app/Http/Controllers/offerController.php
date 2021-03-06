<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class offerController extends Controller
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
        return view('offer.create')->with('customers', $customers);
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
            'offer_number' => 'required|numeric|min:3',
            'description' => 'required|string|min:15'
        ]);

        $offer = new \App\Offer();
        $offer->customer_id = $request->customer_id;
        $offer->number = $request->offer_number;
        $offer->description = $request->description;
        $offer->status = 0;
        $offer->created_at = now();
        $offer->updated_at = now();
        $offer->save();

        return back()->with('success', 'Your offer has been successfully added');
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

        $this->validate($request, [
            'number' => 'required|int',
        ]);

        $offer = Offer::find($id);
        $offer->status = $request->number;
        $offer->save();

        return back()->with('success', 'Offer status successfully edited');
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
