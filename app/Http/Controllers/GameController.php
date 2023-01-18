<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\LetterPhoto;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    //
    public function index()
    {
        return view('games.index');
    }

    public function bolloonGame()
    {
        //    / return view('games.index') ;
        $authorization = RoleController::can('take words test');
        if ($authorization !== null) {
            return $authorization;
        }
        $child = (new Child)->findOrFail(Auth::user()->id);
        $letterPhotos = (new LetterPhoto())->all()->take(10);
        ///dd($child) ;
        $child->score += 5;
        $child->save();
        return view('games.balloon', ['letterPhotos' => $letterPhotos]);

    }

    public function tictactoeGame()
    {
        $authorization = RoleController::can('take words test');
        if ($authorization !== null) {
            return $authorization;
        }
        $child = (new Child)->findOrFail(Auth::user()->id);
        if ($child->score > 20) {
            $child->score -= 20;
            $child->save();
            return view('games.tictactoe');
        }
        return back()->with('error', 'you dont have enouph points!');
    }
}
