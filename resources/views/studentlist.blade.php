@extends('template')

@section('content')

<student-list-component :students="{{ json_encode($registrations) }}"></student-list-component>

@endsection