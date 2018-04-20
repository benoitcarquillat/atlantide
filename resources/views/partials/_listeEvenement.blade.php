<ul>
    @foreach($evenements as $e)
        <li><a href="/evenement/{{$e->id}}">{{$e->nom}}</a></li>
    @endforeach
</ul>