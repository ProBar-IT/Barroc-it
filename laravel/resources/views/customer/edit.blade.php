@extends('master')

@section('content')
    <div class="header col-xs-12">
        <h1 class="page-header col-xs-6">Customer</h1>
        <a href="{{action('customerController@show', $customer->id)}}" class="btn btn-success pull-right page-header">Show customer</a>
    </div>
    @if ( $errors->any() )
        @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    @endif
    @if ( session('success') )
        <p class="col-xs-6 col-xs-offset-3 bg-success" style="text-align: center">{{session('success')}}</p>
    @endif
    <form action="{{action('customerController@update', $customer->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group col-xs-6">
            <label for="">Company name</label>
            <input type="text" class="form-control" value="{{$customer->name}}" name="company_name">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Contact person first name</label>
            <input type="text" class="form-control" value="{{$customer->cp_name}}" name="cp_fist_name">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Contact person intersection</label>
            <input type="text" class="form-control" value="{{$customer->cp_insetion}}" name="cp_intersection">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Contact person last name</label>
            <input type="text" class="form-control" value="{{$customer->cp_lastname}}" name="cp_last_name">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer email</label>
            <input type="text" class="form-control" value="{{$customer->mail}}" name="email">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer telephonenumber</label>
            <input type="text" class="form-control" value="{{$customer->tele}}" name="telephone">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer faxnumber</label>
            <input type="text" class="form-control" value="{{$customer->fax_number}}" name="faxnumber">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer address</label>
            <input type="text" class="form-control" value="{{$customer->street}}" name="street">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer zip code</label>
            <input type="text" class="form-control" value="{{$customer->zip_code}}" name="zip_code">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer house number</label>
            <input type="text" class="form-control" value="{{$customer->housenumber}}" name="housenumber">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer residence</label>
            <input type="text" class="form-control" value="{{$customer->residence}}" name="residence">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer telephone number 2r</label>
            <input type="text" class="form-control" value="{{$customer->tele2}}" name="telphone_2">
        </div>
        <div class="form-group col-xs-6">
            @if($customer->extraaddress != NULL)
            <label for="">Customer address 2</label>
            <input type="text" class="form-control" value="{{$customer->extraaddress->street}}" name="address_2">
            @endif
        </div>
        <div class="form-group col-xs-6">
            @if($customer->extraaddress != NULL)
            <label for="">Customer zip code 2</label>
            <input type="text" class="form-control" value="{{$customer->extraaddress->zip_code}}" name="zip_code_2">
            @endif
        </div>
        <div class="form-group col-xs-6">
            @if($customer->extraaddress != NULL)
                <label for="">Customer house number 2</label>
                <input type="text" class="form-control" value="{{$customer->extraaddress->housenumber}}" name="house_number_2">
            @endif
        </div>
        <div class="form-group col-xs-6">
            @if($customer->extraaddress != NULL)
                <label for="">Customer residence 2</label>
                <input type="text" class="form-control" value="{{$customer->extraaddress->residence}}" name="residence_2">
            @endif
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer bank number </label>
            <input type="text" class="form-control" value="{{$customer->banknumber}}" name="banknumber">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer ledger bill </label>
            <input type="text" class="form-control" value="{{$customer->ledgerbill}}" name="ledgerbill">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer limit </label>
            <input type="text" class="form-control" value="{{$customer->limit}}" name="limit">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer balance </label>
            <input type="text" class="form-control" value="{{$customer->balance}}" name="balance">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Customer vat code </label>
            <input type="text" class="form-control" value="{{$customer->vat_code}}" name="vat_code">
        </div>
        @if(Auth::check())
            @if(Auth::user()->name == 'Finance')
                <div class="form-group col-xs-6">
                    <label for="">Customer BCR</label>
                    <select name="bcr" class="form-control">
                        <option value="" disabled selected>
                            @switch($customer->bcr)
                            @case(0)
                            Status Not controlled
                            @break
                            @case(1)
                            Status No
                            @break
                            @case(2)
                            Status Yes
                            @break
                            @endswitch
                        </option>
                        <option value="0">Not controlled</option>
                        <option value="1">No</option>
                        <option value="2">Yes</option>
                    </select>
                </div>
                <div class="form-group col-xs-6">
                    <label for="">Customer creditworthy</label>
                    <select name="creditworthy" class="form-control">
                        <option value="" disabled selected>
                            @switch($customer->creditworthy)
                            @case(0)
                            Status No
                            @break
                            @case(1)
                            Status Yes
                            @break
                            @endswitch
                        </option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <div class="form-group col-xs-6">
                    <label for="">Customer prospect</label>
                    <select name="prospect" class="form-control">
                        <option value="" disabled selected>
                            @switch($customer->prospect)
                            @case(0)
                            Status No
                            @break
                            @case(1)
                            Status Yes
                            @break
                            @endswitch
                        </option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
            @endif
        @endif
        <input type="submit" value="Save customer" class="btn btn-default col-xs-6 col-xs-offset-3" style="margin-bottom: 50px;">
    </form>
@endsection