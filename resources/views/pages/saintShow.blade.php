@extends('layouts.main-layout')

@section('content')
    <h1>{{$saint->name}}</h1>
    {{$saint->birth_place}} <br>
    {{$saint->blessing_date}} <br>
    {{$saint->miracles_number}} <br>
@endsection