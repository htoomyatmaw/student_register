@extends('template')

@section('content')

    <registeration-component 
        :activities="{{ json_encode($activities) }}"
        :majors="{{ json_encode($majors) }}"
        :year="{{ json_encode($year) }}"
    ></registeration-component>

@endsection