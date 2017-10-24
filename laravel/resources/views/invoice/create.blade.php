@extends('master')

@section('content')
    <h1 class="page-header" style="text-align: center;">Add invoice</h1>
    @if ( $errors->any() )
        @foreach($errors->all() as $error)
            <p class="col-xs-6 col-xs-offset-3 bg-danger" style="text-align: center">{{$error}}</p>
        @endforeach
    @endif
    @if ( session('success') )
        <p class="col-xs-6 col-xs-offset-3 bg-success" style="text-align: center">{{session('success')}}</p>
    @endif
    <form action="{{action('invoiceController@store')}}" method="post" class="col-xs-6 col-xs-offset-3">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Select project</label>
            <select name="project_id" class="form-control">
                <option value="" disabled selected>Select company</option>
                @foreach($projects as $project)
                    <option value="{{$project->id}}">{{$project->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Invoice description </label>
            <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. At blanditiis dignissimos distinctio dolor dolorem doloremque esse excepturi facilis illo labore magni molestiae nam neque nesciunt, odit quo repellendus sunt temporibus?"></textarea>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input class="form-control" type="number" name="price">
        </div>
        <div class="form-group">
            <label for="">Invoice status</label>
            <select name="status" class="form-control">
                <option value="" disabled selected></option>
                <option value="0">Not payed</option>
                <option value="1">Payed</option>
            </select>
        </div>
        <button type="submit" style="margin-bottom: 50px;" class="btn btn-default pull-right">Add invoice</button>
    </form>
@endsection