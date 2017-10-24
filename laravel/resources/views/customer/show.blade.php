@extends('master')

@section('content')
<div class="header col-xs-12">
    <h2 class="page-header col-xs-6">Customer</h2>
    @if(Auth::check())
        @if(Auth::user()->name != 'Finance')
    <a href="{{action('customerController@edit', $customer->id)}}" class="btn btn-default pull-right page-header">Edit customer</a>
        @endif
    @endif
</div>
<div class="row">
    <section class="col-xs-6">
        <ul class="col-xs-12">
            <li class="list-group-item">Company name:<span class="badge">{{$customer->name}}</span></li>
            <li class="list-group-item">Contact person:<span class="badge">{{$customer->cp_name}} {{$customer->cp_insetion}} {{$customer->cp_lastname}}</span></li>
            <li class="list-group-item">E-mail:<span class="badge">{{$customer->mail}}</span></li>
            <li class="list-group-item">Telephonenumber:<span class="badge">{{$customer->tele}}</span></li>
            <li class="list-group-item">Faxnumber:<span class="badge">{{$customer->fax_number}}</span></li>
            <li class="list-group-item">Address:<span class="badge">{{$customer->street}}</span></li>
            <li class="list-group-item">Zipcode:<span class="badge">{{$customer->zip_code}}</span></li>
            <li class="list-group-item">Housenumber:<span class="badge">{{$customer->housenumber}}</span></li>
            <li class="list-group-item">Residence:<span class="badge">{{$customer->residence}}</span></li>
            <li class="list-group-item">Telephonenumber 2:<span class="badge">{{$customer->tele2}}</span></li>
            <li class="list-group-item">Address 2:
                <span class="badge">
                    @if($customer->extraaddress != NULL)
                        <td>{{$customer->extraaddress->street}}</td>
                    @endif
                </span></li>
            <li class="list-group-item">Zipcode 2:
                <span class="badge">
                    @if($customer->extraaddress != NULL)
                        <td>{{$customer->extraaddress->zip_code}}</td>
                    @endif
                </span></li>
            <li class="list-group-item">Housenumber 2:
                <span class="badge">
                    @if($customer->extraaddress != NULL)
                        <td>{{$customer->extraaddress->housenumber}}</td>
                    @endif
                </span></li>
            <li class="list-group-item">Residence 2:
                <span class="badge">
                    @if($customer->extraaddress != NULL)
                        <td>{{$customer->extraaddress->residence}}</td>
                    @endif
                </span></li>
        </ul>
    </section>
    <section class="col-xs-6">
        <ul class="col-xs-12">
            <li class="list-group-item">Banknumber:<span class="badge">{{$customer->banknumber}}</span></li>
            <li class="list-group-item">Ledgerbill:<span class="badge">{{$customer->ledgerbill}}</span></li>
            <li class="list-group-item">Limit:<span class="badge">{{$customer->limit}}</span></li>
            <li class="list-group-item">VAT-code:<span class="badge">{{$customer->vat_code}}</span></li>
            <li class="list-group-item">BCR:
                <span class="badge">
                    @switch($customer->bcr)
                    @case(0)
                    No
                    @break
                    @case(1)
                    Yes
                    @break
                    @endswitch
                </span></li>
            <li class="list-group-item">Creditworthy:
                <span class="badge">
                    @switch($customer->creditworthy)
                    @case(0)
                    No
                    @break
                    @case(1)
                    Yes
                    @break
                    @endswitch
                </span></li>
            <li class="list-group-item">Prospect:
                <span class="badge">
                    @switch($customer->prospect)
                    @case(0)
                    No
                    @break
                    @case(1)
                    Yes
                    @break
                    @endswitch
                </span>
            </li>
        </ul>
    </section>
</div>
<h2 class="page-header">Customer projects</h2>
<section class="col-xs-12">
    <ul>
        @foreach($customer->projects as $project)
            <li class="list-group-item">Project name: <a class="pull-right" href="{{action('projectController@show', $project->id)}}"><span class="badge">{{$project->name}}</span></a></li>
        @endforeach
    </ul>
</section>
@endsection