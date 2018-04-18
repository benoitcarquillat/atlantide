@extends('templates.app')

@section('content')

    <p>Je suis la page qui liste toutes les villes de la bdd</p>

    @foreach($villesList as $vl)
        <a href="{{$vl->ville}}/lieux/{{$vl->id}}">
            {{$vl->ville}}<br/>
        </a>
    @endforeach
@endsection