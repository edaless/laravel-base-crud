@extends('layouts.main-layout')
@section('content')
    
    <h1>Home saints</h1>

    <a href="{{route('saint.create')}}">
        Aggiungi un nuovo santo 
    </a>

    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href="{{route('saint.show',['id'=>$saint->id])}}">
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