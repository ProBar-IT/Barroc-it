@extends('master')

@section('content')
    <h2 class="page-header">Barroc-IT Status</h2>
    <section class="col-xs-6">
        <ul>
            <li class="list-group-item">Projects:<span class="badge">{{count($projects)}}</span></li>
            <li class="list-group-item">Projects not started:<span class="badge">{{count($projects_not)}}</span></li>
            <li class="list-group-item">Projects started:<span class="badge">{{count($projects_star)}}</span></li>
            <li class="list-group-item">Projects finished:<span class="badge">{{count($projects_fin)}}</span></li>
        </ul>
    </section>
    <section class="col-xs-6">
        <ul>
            <li class="list-group-item">Customers:<span class="badge">{{count($customers)}}</span></li>
            <li class="list-group-item">Customers creditworthy:<span class="badge">{{count($cu_credit)}}</span></li>
            <li class="list-group-item">Customers not creditworthy:<span class="badge">{{count($cu_not_credit)}}</span></li>
            <li class="list-group-item">Currently appointments:<span class="badge">{{count($appointments_new)}}</span></li>
        </ul>
    </section>
    <h2 class="page-header">Active appointments</h2>
    <div class="row">
        <div class="col-lg-12">
            <input type="search" id="search" value="" class="form-control" placeholder="Search appointment">
        </div>
    </div>
    <section style="height: 400px; overflow: auto">
        <table class="table" id="table" >
            <thead>
            <tr>
                <th>Customer name</th>
                <th>Description</th>
                <th>Appointment date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($appointments_new as $appointment)
                <tr>
                    <td class="active-tr" data-href="{{action('customerController@show', $appointment->customer->id)}}">{{$appointment->customer->name}}</td>
                    <td>{{$appointment->description}}</td>
                    <td>{{$appointment->next_action}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
