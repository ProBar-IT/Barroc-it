@extends('master')

@section('content')
    <h1 class="page-header" style="text-align: center;">Add project</h1>
    @if ( $errors->any() )
        @foreach($errors->all() as $error)
            <p class="col-xs-6 col-xs-offset-3 bg-danger" style="text-align: center">{{$error}}</p>
        @endforeach
    @endif
    @if ( session('success') )
        <p class="col-xs-6 col-xs-offset-3 bg-success" style="text-align: center">{{session('success')}}</p>
    @endif
    <form action="{{action('projectController@store')}}" method="post" class="col-xs-6 col-xs-offset-3">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Select company </label>
            <select name="customer_id" class="form-control">
                <option value="" disabled selected>Select company</option>
                @foreach($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Project name</label>
            <input class="form-control" type="text" name="project_name">
        </div>
        <div class="form-group">
            <label for="">Project description </label>
            <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. At blanditiis dignissimos distinctio dolor dolorem doloremque esse excepturi facilis illo labore magni molestiae nam neque nesciunt, odit quo repellendus sunt temporibus?"></textarea>
        </div>
        <div class="form-group">
            <label for="">Project status</label>
            <select name="status" class="form-control">
                <option value="" disabled selected></option>
                <option value="0">Not started</option>
                <option value="1">Started</option>
                <option value="2">Finished</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Maintenance contract</label>
            <select name="maintenance" class="form-control">
                <option value="" disabled selected></option>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Applications</label>
            <input class="form-control" type="text" name="applications">
        </div>
        <div class="form-group">
            <label for="">Hardware</label>
            <input class="form-control" type="text" name="hardware">
        </div>
        <div class="form-group">
            <label for="">Operating system</label>
            <input class="form-control" type="text" name="operating_system">
        </div>
        <div class="form-group">
            <label for="">Internal contact person</label>
            <input class="form-control" type="text" name="internal_cp">
        </div>
        <button type="submit" style="margin-bottom: 50px;" class="btn btn-default pull-right">Add project</button>
    </form>
@endsection