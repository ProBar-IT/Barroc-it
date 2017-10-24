@extends('master')

@section('content')
    <div class="header col-xs-12">
        <h2 class="page-header col-xs-6">Edit project</h2>
        <a href="{{action('projectController@show', $project->id)}}" class="btn btn-success pull-right page-header">Show project</a>
    </div>
    @if ( $errors->any() )
        @foreach($errors->all() as $error)
            <p class="col-xs-6 col-xs-offset-3 bg-danger" style="text-align: center">{{$error}}</p>
        @endforeach
    @endif
    @if ( session('success') )
        <p class="col-xs-6 col-xs-offset-3 bg-success" style="text-align: center">{{session('success')}}</p>
    @endif
    <form action="{{action('projectController@update', $project->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group col-xs-6">
            <label for="">Project name</label>
            <input type="text" class="form-control" value="{{$project->name}}" name="project_name">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Project status</label>
            <select name="payed_status" class="form-control">
                <option value="" disabled selected>
                    @switch($project->status)
                    @case(0)
                    Status Not started
                    @break
                    @case(1)
                    Status Started
                    @break
                    @case(2)
                    Status Paused
                    @break
                    @case(3)
                    Status Finished
                    @break
                    @endswitch
                </option>
                <option value="0">Not started</option>
                <option value="1">Started</option>
                <option value="2">Paused</option>
                <option value="3">Finished</option>
            </select>
        </div>
        <div class="form-group col-xs-6">
            <label for="">Maintenance contract</label>
            <select name="maintenance_contract" class="form-control">
                <option value="" disabled selected>
                    @switch($project->maintenance_contract)
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
            <label for="">Project applications</label>
            <input type="text" class="form-control" value="{{$project->applications}}" name="project_applications">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Project hardware</label>
            <input type="text" class="form-control" value="{{$project->hardware}}" name="project_hardware">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Project operating system</label>
            <input type="text" class="form-control" value="{{$project->operating_system}}" name="project_system">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Project operating system</label>
            <input type="text" class="form-control" value="{{$project->internal_cp}}" name="internal_cp">
        </div>
        <div class="form-group col-xs-12">
            <label for="">Project description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$project->description}}</textarea>
        </div>
        <input type="submit" value="Save project" class="btn btn-default col-xs-6 col-xs-offset-3" style="margin-bottom: 50px;">
    </form>
@endsection