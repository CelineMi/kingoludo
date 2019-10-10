<?php

namespace App\Http\Controllers;

use App\Game;
use App\Model\GameModel;
use App\User;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = GameModel::all();
        return view('game.index')->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'editor' => 'required|max:255',
            'year' => 'required',
            'photos' => 'required',
            'category' => 'required',
            'length' => 'required',
            'playersnumber' => 'required',
            'comment' => 'required|max:2550',
        ]);

        $game = new GameModel();
        $game->name = $request['name'];
        $game->editor = $request['editor'];
        $game->year = $request['year'];
        $game->photos =$request['photos'];
        $game->description =$request['description'];
        $game->category = $request['category'];
        $game->length = intval($request['length']);
        $game->playersNumber = intval($request['playersnumber']);
        $game->comment = $request['comment'];

        $game->save();

        return redirect(route('game.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(GameModel $game)
    {
        return view('game.show')->with('game', $game);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(GameModel $game)
    {
        //
        return view('game.edit')->with('game', $game);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'editor' => 'required|max:255',
            'year' => 'required',
            'photos' => 'required',
            'category' => 'required',
            'length' => 'required',
            'playersnumber' => 'required',
            'comment' => 'required|max:2550',
        ]);
        //
//        GameModel::update($request->find($id));
        $game = $request->find($id);
        $game->name = $request['name'];
        $game->editor = $request['editor'];
        $game->year = $request['year'];
        $game->photos =$request['photos'];
        $game->description =$request['description'];
        $game->category = $request['category'];
        $game->length = intval($request['length']);
        $game->playersNumber = intval($request['playersnumber']);
        $game->comment = $request['comment'];

        $game->save();
        return redirect(route('game.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
