@extends('template')

@section('content')

<select-enrolled-component :res="{{ json_encode($resInfo) }}"></select-enrolled-component>

@endsection


