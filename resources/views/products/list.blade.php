@extends('layouts.shared-layout')

@section('content')
@foreach ($products as $p )
<div>
    <h2>{{$p->name}}</h2>
    <p>{{$p->desc}}</p>
    <h6>price: {{$p->price}}</h6>
    <hr>

</div>
@endforeach

@endsection


