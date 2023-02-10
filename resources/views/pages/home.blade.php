@extends('layouts.main-layout')
@section('content')
    
    <h1>Home blade</h1>

    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href="saint/{{$saint->id}}">
                    {{$saint->name}}
                </a>
                --------
                <a href="{{route('saint.destroy',['id'=>$saint->id])}}">
                    X
                </a>
                
            </li>            
        @endforeach
    </ul>

@endsection