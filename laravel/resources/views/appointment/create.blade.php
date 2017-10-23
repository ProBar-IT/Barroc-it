@extends('master')

@section('content')
    <h1 class="page-header" style="text-align: center;">Add appointment</h1>
    @if ( $errors->any() )
        @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    @endif
    @if ( session('success') )
        <p class="col-xs-6 col-xs-offset-3 bg-success" style="text-align: center">{{session('success')}}</p>
    @endif
    <form action="{{action('appointmentController@store')}}" method="post" class="col-xs-6 col-xs-offset-3">
        {{csrf_field()}}
        <div class="form-group">
            <label for="Company_name">Select company </label>
            <select name="customer_id" class="form-control" id="Company_Name">
                <option value="" disabled selected>Select company</option>
                @foreach($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Date">Appointment date</label>
            <input class="form-control" type="date" name="date" id="Date">
        </div>
        <div class="form-group">
            <label for="Time">Appointment time</label>
            <input class="form-control" type="time" name="time" id="Time">
        </div>
        <div class="form-group">
            <label for="">Appointment description </label>
            <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. At blanditiis dignissimos distinctio dolor dolorem doloremque esse excepturi facilis illo labore magni molestiae nam neque nesciunt, odit quo repellendus sunt temporibus?"></textarea>
        </div>
        <button type="submit" style="margin-bottom: 50px;" class="btn btn-default pull-right">Add appointment</button>
    </form>
@endsection