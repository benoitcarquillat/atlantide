@extends('templates.app')

@section('content')

<div class="container">
    <h1>Votre espace admin</h1>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Liste de tous les utilisateurs</div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">pseudo</th>
                    <th scope="col">img</th>
                    <th scope="col">email</th>
                    <th scope="col">admin?</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="col">{{$user->id}}</th>
                        <th scope="col">{{$user->nom}}</th>
                        <th scope="col">{{$user->prenom}}</th>
                        <th scope="col">{{$user->pseudo}}</th>
                        <th scope="col">{{$user->img}}</th>
                        <th scope="col">{{$user->email}}</th>
                        <th scope="col">{{$user->admin}}</th>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>


@include('Admin/tables/lieux')

@include('templates/nav')


@endsection