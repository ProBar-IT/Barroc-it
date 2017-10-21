@extends('master')

@section('content')
    <h1 class="page-header" style="text-align: center;">Add customer</h1>
    <form action="" method="post" class="col-xs-6 col-xs-offset-3">
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
        <div class="form-group">
            <select name="creditworthy" class="form-control" place>
                <option value="" disabled selected>Creditworthy</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <select name="bcr" class="form-control" place>
                <option value="" disabled selected>BCR</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <select name="status" class="form-control" place>
                <option value="" disabled selected>Status</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <button type="submit" style="margin-bottom: 50px;" class="btn btn-default pull-right">Add customer</button>
    </form>
@endsection