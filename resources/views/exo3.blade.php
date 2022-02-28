@extends('layout.app')
@section('content')
    <h1>exo3</h1>
    @if ($var1 != null && $var2 != null)
        <p>{{ $var1 . ' + ' . $var2 . ' = ' . $var1 + $var2 }}</p>
        <p>{{ $var1 . ' - ' . $var2 . ' = ' . $var1 - $var2 }}</p>
    @else
        <p>Vous devez entrer deux nombres...</p>
    @endif
@endsection
