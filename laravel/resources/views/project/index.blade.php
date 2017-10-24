@extends('master')

@section('content')
    <div class="header col-xs-12">
        <h2 class="page-header col-xs-6">Projects</h2>
        @if(Auth::check())
            @if(Auth::user()->name != 'Development')
        <a href="{{action('projectController@create')}}" class="btn btn-success pull-right page-header">Add project</a>
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
                    <th>Project description</th>
                    <th>Project status</th>
                    <th>Maintenance contract</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr class="active-tr" data-href="{{action('projectController@show', $project->id)}}">
                        <td>{{$project->name}}</td>
                        <td>{{$project->description}}</td>
                        <td>
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
                        </td>
                        <td>
                            @switch($project->maintained_contract)
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



