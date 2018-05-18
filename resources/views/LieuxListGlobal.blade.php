@extends('templates.app')

@section('content')
 <div class="lieuxlistglobal"> 
<div class="container_titre">
    <h3>Retrouvez ici toutes les villes présentant des lieux d'intérêt</h3>
</div>
<div class="liste_liens">
    @foreach($lieuxListGlobal as $llg)
    <div class="lien">
        <a href="/lieux/{{$llg->nom}}">
            {{$llg->nom}} 
        </a>
        à
        <a href="/{{$llg->ville}}/lieux">
            {{$llg->ville}} 
        </a>
    </div><br/>
    @endforeach
 </div>
@endsection