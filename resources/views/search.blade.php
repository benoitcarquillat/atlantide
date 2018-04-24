@extends('templates.app')

@section('content')
    Voici ma query

    <ul>

        @foreach ($results as $result)
           <li> {{$result->nom}} </li>
        @endforeach
    </ul>

@endsection