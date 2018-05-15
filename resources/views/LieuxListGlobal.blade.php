@extends('templates.app')

@section('content')
    <p>Je suis la page qui recense la liste de tous les lieux toutes villes confondues
    </p>

    @foreach($lieuxListGlobal as $llg)
        <a href="/lieux/{{$llg->nom}}">
            {{$llg->nom}} 
        </a>
        à
        <a href="/{{$llg->ville}}/lieux">
            {{$llg->ville}} 
        </a><br/>

    @endforeach
@endsection