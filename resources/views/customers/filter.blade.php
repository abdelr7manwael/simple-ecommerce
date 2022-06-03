@extends('layouts.shared-layout')

@section('content')
@foreach ($customers as $c )
<div>
    <h2>{{$c->customerName}}</h2>
    <p>{{$c->customerEmail}}</p>
    <p>{{$c->customerPhone}}</p>
    <h6>{{$c->customerCity}}</h6>
    <hr>


</div>
@endforeach

@endsection
