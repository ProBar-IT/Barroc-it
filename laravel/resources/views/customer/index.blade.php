@extends('master')

@section('content')
    <div class="header col-xs-12">
        <h2 class="page-header col-xs-6">Customers</h2>
        @if(Auth::check())
            @if(Auth::user()->name == 'Sales' || Auth::user()->name == 'Admin')
                <a href="{{action('customerController@create')}}" class="btn btn-default pull-right page-header">Add customer</a>
            @endif
        @endif
    </div>
    <div class="row">
        <div class="col-lg-12">
            <input type="search" id="search" value="" class="form-control" placeholder="Search customer">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table" id="table">
                <thead>
                <tr>
                    <th>Company name:</th>
                    <th>Contact person</th>
                    <th>Telephone number</th>
                    <th>Creditworthy</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr class="active-tr" data-href="{{action('customerController@show', $customer->id)}}">
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->cp_name}} {{$customer->cp_lastname}}</td>
                        <td>{{$customer->tele}}</td>
                        <td>
                            @switch($customer->creditworthy)
                                @case(false)
                                No
                                @break
                                @case(true)
                                Yes
                                @break
                            @endswitch
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <hr>
        </div>
    </div>

@endsection



