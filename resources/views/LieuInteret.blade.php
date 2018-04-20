@extends('templates.app')

@section('content')
<p>Je suis la page d'un lieu d'intéret de </p>

    @foreach($lieu as $l)
        {{$l->type}}<br/>
        {{$l->nom}}<br/>
        {{$l->description}}<br/>
        {{$l->adresse}}<br/>
    @endforeach


@endsection