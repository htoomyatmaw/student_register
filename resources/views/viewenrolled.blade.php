@extends('template')

@section('content')

<view-enrolled-component 
    :enrolled="{{ json_encode($registeration) }}"
    :relationdata="{{ json_encode($relation_data) }}"
>
</view-enrolled-component>

@endsection


