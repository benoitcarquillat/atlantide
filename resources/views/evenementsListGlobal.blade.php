@extends('templates.app')

@section('content')
    <p>Je suis la page qui recense la liste de tous les evenements toutes villes confondues
    </p>

    @foreach($evenementsListGlobal as $elg)
        <a href="/evenements/{{$elg->nom}}">
            {{$elg->nom}} 
        </a>
        à
        <a href="/{{$elg->ville}}/evenements">
            {{$elg->ville}} 
        </a><br/>

    @endforeach
@endsection