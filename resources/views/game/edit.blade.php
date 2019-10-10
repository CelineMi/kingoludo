@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-3">
            @if($errors->any())
                    @foreach($errors->all() as $error)
                    {{ $error }}</br>
                @endforeach
            @endif
            <form method="POST" action="{{ route('game.store') }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nom du jeu</label>
                    {{ Form::text('name','' ,['class' => 'form-control', 'game.update', $game->name ] )}}
                </div>
                <div class="form-group">
                    <label for="editor">Editeur</label>
                    {{ Form::text('editor','' ,['class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    <label for="year">Année d'édition</label>
                    {{ Form::number('year','' ,['class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    <label for="photos">Photo du jeu</label>
                    {{ Form::file('photos')}}
                </div>

                <div class="form-group">
                    <label for="description">Description du jeu</label>
                    {{ Form::text('description','' ,['class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    <label for="category">Catégorie</label>
                    {{ Form::select('category', ['Familial', 'Expert', 'Figurine', 'Apéro'], 'Familial' ,['class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    <label for="length">Durée du jeu (en minutes)</label>
                    {{ Form::number('length'), ['class' => 'form-control']}}
                </div>

                <div class="form-group">
                    <label for="playersnumber">Nombre de joueurs</label>
                    {{ Form::number('playersnumber'), ['class' => 'form-control']}}
                </div>

                <div class="form-group">
                    <label for="comment">Commentaire</label>
                    {{ Form::text('comment','' ,['class' => 'form-control'])}}
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>



@endsection
