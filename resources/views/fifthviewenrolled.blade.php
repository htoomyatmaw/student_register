@extends('template')

@section('content')

<fifthview-enrolled-component 
    :enrolled="{{ json_encode($registeration) }}"
    :relationdata="{{ json_encode($relation_data) }}"
>
</fifthview-enrolled-component>

@endsection


