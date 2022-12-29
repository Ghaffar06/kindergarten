<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\LetterPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    //
    public function index()
    {
        return view('games.index') ;
    }
    public function bolloonGame()
    {
    //    / return view('games.index') ;
        $child = (new Child)->findOrFail(Auth::user()->id);
        $letterPhotos = (new LetterPhoto())->all()->take(10) ;
        ///dd($child) ;
        if($child->score > -1){
            //$child->score -= 30 ;
            $child->save() ;
            return view('games.balloon', ['letterPhotos' => $letterPhotos]) ;
        }
        return back()->with('error', 'you dont have enough points!'); 
    }
    public function tictactoeGame()
    {
        $child = (new Child)->findOrFail(Auth::user()->id);
        if($child->score > 20){
            $child->score -= 20 ;
            $child->save() ;
            return view('games.tictactoe') ;
        }
        return back()->with('error', 'you dont have enouph points!'); 
    }
}
