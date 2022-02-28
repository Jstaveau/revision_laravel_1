@extends('layout.app')
@section('content')
    <ul>
        {!!$color == 'red' ? '<li><b>red</b></li>' : '<li>red</li>'!!}
        {!!$color == 'green' ? '<li><b>green</b></li>' : '<li>green</li>'!!}
        {!!$color == 'blue' ? '<li><b>blue</b></li>' : '<li>blue</li>'!!}
        {!!$color == 'white' ? '<li><b>white</b></li>' : '<li>white</li>'!!}
    </ul>
@endsection