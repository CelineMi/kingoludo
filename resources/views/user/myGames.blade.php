@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="display-4 text-center my-5">Tous vos jeux</h1>
    <div class="row">
        @foreach($games as $game)
            <div class="col-md-3">
                <div class="card my-5">
                    <img src="{{ $game->photos }}" class="card-img-top" alt="{{$game->name}}">
                    <div class="card-header text-center">
                        {{ $game->name }}
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $game->description }}</li>
                            <li class="list-group-item">Categorie : {{ $game->category }}</li>
                            <li class="list-group-item">Nombre de joueurs : {{ $game->playersnumber }}</li>
                            <li class="list-group-item">Durée d'une partie : {{ $game->length }} mn</li>
                            <li class="list-group-item">Editeur : {{  $game->editor }} en {{ $game->year }}</li>
                            <li class="list-group-item"><a href="{{ route('game.delete-my-game' , $game->id ) }}"><button class="btn btn-primary btn sm">Supprimer ma collection</button></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>




@endsection
