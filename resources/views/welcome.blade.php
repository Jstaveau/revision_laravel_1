@extends('layout.app')
@section('content')
    @if ($number != null)
    <p>{{$number}} x 4 = {{$number * 4}}</p>
    @else
    <p>Vous n'avez pas entré un chiffre...</p>
    @endif
@endsection