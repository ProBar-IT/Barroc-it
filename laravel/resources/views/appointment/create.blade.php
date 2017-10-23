@extends('master')

@section('content')
    <h1 class="page-header" style="text-align: center;">Add appointment</h1>
    <form action="" method="post" class="col-xs-6 col-xs-offset-3">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Select company </label>
            <select name="customer_id" class="form-control" place>
                <option value="" disabled selected>Select company</option>
                @foreach($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Appointment date and time</label>
            <input class="form-control" type="datetime-local" name="street_name">
        </div>
        <div class="form-group">
            <label for="">Appointment description </label>
            <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. At blanditiis dignissimos distinctio dolor dolorem doloremque esse excepturi facilis illo labore magni molestiae nam neque nesciunt, odit quo repellendus sunt temporibus?"></textarea>
        </div>
        <button type="submit" style="margin-bottom: 50px;" class="btn btn-default pull-right">Add appointment</button>
    </form>
@endsection