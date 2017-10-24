@extends('master')

@section('content')
    <div class="header col-xs-12">
        <h1 class="page-header col-xs-6">Invoice</h1>
        <a href="{{action('invoiceController@edit', $invoice->id)}}" class="btn btn-success pull-right page-header">Edit invoice</a>
    </div>
    <section>
        <table class="table" id="table">
            <thead>
            <tr>
                <th>Project name:</th>
                <th>Price</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$invoice->project->name}}</td>
                    <td>{{$invoice->price}}</td>
                    <td>{{$invoice->date_of_sending}}</td>
                    <td>
                        @switch($invoice->status)
                        @case(false)
                        Not payed
                        @break
                        @case(true)
                        Payed
                        @break
                        @endswitch
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection