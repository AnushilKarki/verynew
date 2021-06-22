@extends('layouts.vue')

@section('content')

@if (auth()->user()->hasRole('superadmin'))
        <example-component></example-component>
@elseif (auth()->user()->hasRole('admin'))
    I have multiple admin records!
@elseif (auth()->user()->hasRole('seller'))
    I don't have any records!
@elseif (auth()->user()->hasRole('deliveryrider'))
I don't have any records!
@elseif (auth()->user()->hasRole('delivery_manager'))
I don't have any records!
@else
<p>you are customer</p>
@endif
<router-view></router-view>

@endsection