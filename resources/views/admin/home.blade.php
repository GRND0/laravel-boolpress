@extends('layouts.dashboard')

@section('content')
    <h2> Ciao {{$user->name}}. questa è la Home Backoffice</h2>
    @if ($userInfo)
          <p>{{$userInfo->address}}</p>
    @endif
  
@endsection