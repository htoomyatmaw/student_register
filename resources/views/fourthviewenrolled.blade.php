@extends('template')

@section('content')

<fourthview-enrolled-component 
    :enrolled="{{ json_encode($registeration) }}"
    :relationdata="{{ json_encode($relation_data) }}"
>
</fourthview-enrolled-component>

@endsection


