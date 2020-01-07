@extends('template')

@section('content')

<secondview-enrolled-component 
    :enrolled="{{ json_encode($registeration) }}"
    :relationdata="{{ json_encode($relation_data) }}"
>
</secondview-enrolled-component>

@endsection


