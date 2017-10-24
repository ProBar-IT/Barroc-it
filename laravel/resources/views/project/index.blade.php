@extends('master')

@section('content')
    <div class="header col-xs-12">
        <h1 class="page-header col-xs-6">Customers</h1>
        <a href="{{action('projectController@create')}}" class="btn btn-success pull-right page-header">Add project</a>
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
                    <th>Payed</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr class="active-tr" data-href="{{action('projectController@show', $project->id)}}">
                        <td>{{$project->name}}</td>
                        <td>{{$project->description}}</td>
                        <td>{{$customer->tele}}</td>
                        <td>
                            @switch($project->status)
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



