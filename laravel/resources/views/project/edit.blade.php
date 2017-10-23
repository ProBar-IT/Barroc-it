@extends('master')

@section('content')
    <h1 class="page-header">Edit project</h1>
    <form action="" method="post">
        {{csrf_field()}}
        <div class="form-group col-xs-6">
            <label for="">Project name</label>
            <input type="text" class="form-control" value="{{$project->name}}" name="project_name">
        </div>
        <div class="form-group col-xs-6">
            <label for="">Payed status</label>
            <select name="payed_status" class="form-control">
                <option value="" disabled selected>
                    @switch($project->status)
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
            <label for="">Maintenance contract</label>
            <select name="maintenance_contract" class="form-control">
                <option value="" disabled selected>
                    @switch($project->status)
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
        <div class="form-group col-xs-12">
            <label for="">Project description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$project->description}}</textarea>
        </div>
        <input type="submit" value="Save project" class="btn btn-default col-xs-6 col-xs-offset-3" style="margin-bottom: 50px;">
    </form>
@endsection