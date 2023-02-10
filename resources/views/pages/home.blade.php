@extends('layouts.main-layout')
@section('content')
    
    <h1>Home blade</h1>

    <ul>
        @foreach ($saints as $saint)
            <li>
                <b>
                    {{$saint->name}} <br>
                </b>
                {{$saint->birth_place}} <br>
                {{$saint->blessing_date}} <br>
                {{$saint->miracles_number}} <br>
            </li>            
        @endforeach
    </ul>

@endsection