<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Offer;
use App\Project;
use Illuminate\Http\Request;
use App\Costumer;

class customerController extends Controller
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
        $customers = Customer::all();
        return view('customer.index', compact('customers', $customers));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
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
            'company_name' => 'required|string|min:4',
            'street_name' => 'required|string',
            'house_number' => 'required|string|min:1',
            'zip_code' => 'required|string|min:4',
            'country' => 'required|string|min:1',
            'cp_first_name' => 'required|string|min:1',
            'cp_last_name' => 'required|string|min:1',
            'cp_intersection' => 'required|string|min:1',
            'tel_number' => 'required|int|min:9',
            'tel_number_2' => 'required|int|min:9',
            'fax_number' => 'required|int|min:9',
            'email' => 'required|email',
            'bank_number' => 'required|string|min:9',
            'balance' => 'required|int|min:1',
            'balance_limit' => 'required|int|min:1',
            'vat_code' => 'required|string|min:2',
            'prospect' => 'required',
            'ledger_bill' => 'required'
        ]);

        $customer = new \App\Customer();
        $customer->name = $request->company_name;
        $customer->street = $request->street_name;
        $customer->housenumber = $request->house_number;
        $customer->zip_code = $request->zip_code;
        $customer->residence = $request->country;
        $customer->cp_name = $request->cp_first_name;
        $customer->cp_lastname = $request->cp_last_name;
        $customer->cp_insertion = $request->cp_intersection;
        $customer->tele = $request->tel_number;
        $customer->tele2 = $request->tel_number_2;
        $customer->fax_number = $request->fax_number;
        $customer->mail = $request->email;
        $customer->banknumber = $request->bank_number;
        $customer->balance = $request->balance;
        $customer->limit = $request->balance_limit;
        $customer->vat_code = $request->vat_code;
        $customer->prospect = $request->prospect;
        $customer->ledgerbill = $request->ledger_bill;
        $customer->creditworthy = 0;
        $customer->bcr = 0;
        $customer->status = 0;
        $customer->created_at = Now();
        $customer->updated_at = Now();
        $customer->save();

        return back()->with('success', 'Customer added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);

        return view('customer.show')
            ->with('customer' , $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);

        return view('customer.edit')
            ->with('customer', $customer);
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
            'company_name' => 'required|string|min:4',
            'street' => 'required|string',
            'housenumber' => 'required|string|min:1',
            'zip_code' => 'required|string|min:4',
            'residence' => 'required|string|min:1',
            'cp_fist_name' => 'required|string|min:1',
            'cp_last_name' => 'required|string|min:1',
            'telephone' => 'required|string|min:9',
            'telphone_2' => 'required|string|min:9',
            'faxnumber' => 'required|string|min:9',
            'email' => 'required|email',
            'banknumber' => 'required|string|min:9',
            'balance' => 'required|int|min:1',
            'limit' => 'required|int|min:1',
            'vat_code' => 'required|string|min:2',
            'ledgerbill' => 'required'
        ]);

        $customer = Customer::find($id);
        $customer->name = $request->company_name;
        $customer->street = $request->street;
        $customer->housenumber = $request->housenumber;
        $customer->zip_code = $request->zip_code;
        $customer->residence = $request->residence;
        $customer->cp_name = $request->cp_fist_name;
        $customer->cp_lastname = $request->cp_last_name;
        $customer->tele = $request->telephone;
        $customer->tele2 = $request->telphone_2;
        $customer->fax_number = $request->faxnumber;
        $customer->mail = $request->email;
        $customer->banknumber = $request->banknumber;
        $customer->balance = $request->balance;
        $customer->limit = $request->limit;
        $customer->vat_code = $request->vat_code;
        $customer->ledgerbill = $request->ledgerbill;
        $customer->creditworthy = 0;
        $customer->bcr = 0;
        $customer->status = 0;
        $customer->created_at = Now();
        $customer->updated_at = Now();
        if (isset($request->cp_intersection))
        {
            $customer->cp_insertion = $request->cp_intersection;
        }
        if (isset($request->prospect))
        {
            $customer->prospect = $request->prospect;
        }
        else
            $customer->prospect = 0;
        if (isset($request->bcr))
        {
            $customer->bcr = $request->bcr;
        }
        else
            $customer->bcr = 0;
        if (isset($request->creditworthy))
        {
            $customer->creditworthy = $request->creditworthy;
        }
        else
            $customer->creditworthy = 0;
        $customer->save();

        return back()->with('success', 'Customer edited successfully');
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
