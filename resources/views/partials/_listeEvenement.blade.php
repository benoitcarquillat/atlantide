<ul>
    @foreach($evenements as $e)
        <li><a href="/film/{{$e->id}}">{{$e->nom}}</a></li>
    @endforeach
</ul>