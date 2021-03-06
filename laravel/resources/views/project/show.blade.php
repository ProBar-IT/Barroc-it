@extends('master')

@section('content')
    <div class="header col-xs-12">
        <h2 class="page-header col-xs-6">Project</h2>
        <a href="{{action('projectController@edit', $project->id)}}" class="btn btn-default pull-right page-header">Edit project</a>
    </div>
        <section class="col-xs-12">
            <ul>
                <li class="list-group-item">Project name:<span class="badge">{{$project->name}}</span></li>
                <li class="list-group-item">Project status:<span class="badge">
                        @switch($project->status)
                            @case(0)
                            Not started
                            @break
                            @case(1)
                            Started
                            @break
                            @case(2)
                            Paused
                            @break
                            @case(3)
                            Finished
                            @break
                        @endswitch
                    </span></li>
                <li class="list-group-item">Maintenance contract:<span class="badge">{{$project->maintained_contract}}</span></li>
                <li class="list-group-item">Application:<span class="badge">{{$project->applications}}</span></li>
                <li class="list-group-item">hardware:<span class="badge">{{$project->hardware}}</span></li>
                <li class="list-group-item">Operating system:<span class="badge">{{$project->operating_system}}</span></li>
                <li class="list-group-item">Started:<span class="badge">{{$project->created_at}}</span></li>
                <li class="list-group-item">Customer: <a class="pull-right" href="{{action('customerController@show' , $project->customer->id)}}"><span class="badge">{{$project->customer->name}}</span></a></li>
            </ul>
        </section>
        <section>
            @if(Auth::check())
                @if(Auth::user()->name == 'Finance' || Auth::user()->name == 'Admin')
            <h2 class="page-header">Invoices</h2>
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
                @foreach($project->invoices as $invoice)
                    <tr>
                        <td class="active-tr" data-href="{{action('invoiceController@show', $invoice->id)}}">{{$invoice->project->name}}</td>
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
                @endforeach
                </tbody>
            </table>
                @endif
            @endif
        </section>
@endsection