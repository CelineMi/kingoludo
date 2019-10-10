@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-6 offset-3">
            <div class="card my-5">
                <img src="{{ $game->photos }}" class="card-img-top" alt="...">
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

                    </ul>
                </div>
            </div>
        </div>
</div>
@endsection
