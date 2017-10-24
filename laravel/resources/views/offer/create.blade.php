@extends('master')

@section('content')
    <h2 class="page-header" style="text-align: center;">Add offer</h2>
    @if ( $errors->any() )
        @foreach($errors->all() as $error)
            <p class="col-xs-6 col-xs-offset-3 bg-danger" style="text-align: center">{{$error}}</p>
        @endforeach
    @endif
    @if ( session('success') )
        <p class="col-xs-6 col-xs-offset-3 bg-success" style="text-align: center">{{session('success')}}</p>
    @endif
    <form action="{{action('offerController@store')}}" method="post" class="col-xs-6 col-xs-offset-3">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Select customer </label>
            <select name="customer_id" class="form-control">
                <option value="" disabled selected>Select customer</option>
                @foreach($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Offer price</label>
            <input class="form-control" type="number" name="offer_number">
        </div>
        <div class="form-group">
            <label for="Offer_description">Offer description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam aspernatur consequatur debitis laboriosam, minima necessitatibus nesciunt odit omnis rerum? Atque distinctio eos est impedit ipsam, maxime non omnis vero."></textarea>
        </div>
        <button type="submit" style="margin-bottom: 50px;" class="btn btn-default pull-right">Add offer</button>
    </form>
@endsection