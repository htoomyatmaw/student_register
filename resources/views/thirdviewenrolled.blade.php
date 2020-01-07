@extends('template')

@section('content')

<thirdview-enrolled-component 
    :enrolled="{{ json_encode($registeration) }}"
    :relationdata="{{ json_encode($relation_data) }}"
>
</thirdview-enrolled-component>

@endsection


