@extends('master')

@section('content')
    <div class="header col-xs-12">
        <h2 class="page-header col-xs-6">Edit invoice</h2>
        <a href="{{action('invoiceController@show', $invoice->id)}}" class="btn btn-default pull-right page-header">Show invoice</a>
    </div>
    @if ( $errors->any() )
        @foreach($errors->all() as $error)
            <p class="col-xs-6 col-xs-offset-3 bg-danger" style="text-align: center">{{$error}}</p>
        @endforeach
    @endif
    @if ( session('success') )
        <p class="col-xs-6 col-xs-offset-3 bg-success" style="text-align: center">{{session('success')}}</p>
    @endif
    <form action="{{action('invoiceController@update', $invoice->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group col-xs-6" hidden>
            <input type="text" class="form-control" value="{{$invoice->project->id}}" name="project_id">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Project name</label>
            <input type="text" class="form-control" value="{{$invoice->project->name}}" name="project_name" disabled>
        </div>
        <div class="form-group col-xs-6">
            <label for="">Invoice price</label>
            <input type="text" class="form-control" value="{{$invoice->price}}" name="invoice_price">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Date of sending</label>
            <input type="text" class="form-control" value="{{$invoice->date_of_sending}}" name="invoice_send" disabled>
        </div>
        <div class="form-group col-xs-6">
            <label for="">Project status</label>
            <select name="payed_status" class="form-control">
                <option value="" disabled selected>
                    @switch($invoice->status)
                    @case(0)
                    Status Not payed
                    @break
                    @case(1)
                    Status Payed
                    @break
                    @endswitch
                </option>
                <option value="0">Not payed</option>
                <option value="1">Payed</option>
            </select>
        </div>
        <div class="form-group col-xs-12">
            <label for="">Project description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$invoice->description}}</textarea>
        </div>
        <input type="submit" value="Save invoice" class="btn btn-default col-xs-6 col-xs-offset-3" style="margin-bottom: 50px;">
    </form>
@endsection