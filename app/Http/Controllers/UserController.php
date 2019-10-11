<?php

namespace App\Http\Controllers;

use App\Game;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showMyGames()
    {
        $user = auth()->user();
        $games = User::ofUserConnected($user->id)->first()->games()->get();
        return view('user.myGames')->with('games', $games);

    }
}
