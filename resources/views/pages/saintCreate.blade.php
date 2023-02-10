@extends('layouts.main-layout')

@section('content')

<h1>create new saint</h1>

<form method="POST" action="{{ route('saint.store') }}">
    @csrf
    <label for="name">name</label>
    <input type="text" name="name" id="">
    <br>
    <label for="birth_place">birth place</label>
    <input type="text" name="birth_place" id="">
    <br>
    <label for="blessing_date">blessing date</label>
    <input type="date" name="blessing_date" id="">
    <br>
    <label for="miracles_number">miracles number</label>
    <input type="number" name="miracles_number" id="">
    <br>

    <input type="submit" value="CREATE">
</form>
    
@endsection