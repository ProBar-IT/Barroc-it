@extends('master')

@section('content')
    <h2 class="page-header" style="text-align: center;">Add customer</h2>
    @if ( $errors->any() )
        @foreach($errors->all() as $error)
            <p class="col-xs-6 col-xs-offset-3 bg-danger" style="text-align: center">{{$error}}</p>
        @endforeach
    @endif
    @if ( session('success') )
        <p class="col-xs-6 col-xs-offset-3 bg-success" style="text-align: center">{{session('success')}}</p>
    @endif
    <form action="{{action('customerController@store')}}" method="post" class="col-xs-6 col-xs-offset-3">
        {{csrf_field()}}
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Company name" name="company_name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Street name" name="street_name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="House number" name="house_number">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Zip code" name="zip_code">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Country" name="country">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Contact person first name" name="cp_first_name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Contact person last name" name="cp_last_name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Contact person intersection" name="cp_intersection">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Telephone number" name="tel_number">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Second telephone number" name="tel_number_2">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Fax number" name="fax_number">
        </div>

        <div class="form-group">
            <input class="form-control" type="email" placeholder="Mail" name="email">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Bank number" name="bank_number">
        </div>
        <div class="form-group">
            <input class="form-control" type="number" placeholder="Balance" name="balance">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Balance limit" name="balance_limit">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Vat code" name="vat_code">
        </div>
        <div class="form-group">
            <input class="form-control" type="number" placeholder="Prospect" name="prospect">
        </div>
        <div class="form-group">
            <input class="form-control" type="number" placeholder="Ledger bill" name="ledger_bill">
        </div>
        <button type="submit" style="margin-bottom: 50px;" class="btn btn-default pull-right">Add customer</button>
    </form>
@endsection