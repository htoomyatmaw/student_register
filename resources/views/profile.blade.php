@extends('template')

@section('content')

<profile-component :userdata = "{{ json_encode($user) }}"></profile-component>

@endsection

