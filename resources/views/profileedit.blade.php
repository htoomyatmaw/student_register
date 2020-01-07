@extends('template')

@section('content')

<profile-edit-component :useredit ="{{ json_encode($useredit) }}"></profile-edit-component>

@endsection