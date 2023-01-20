<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Report;

class AdminController extends Controller
{
    //
    public function index()
    {
        if (\Auth::user()->role != 'admin') {
            return back()->with('error', 'unauthorized method!!');
        }
        
        return view('admin.panel') ;
    }
    public function child()
    {
        if (\Auth::user()->role != 'admin') {
            return back()->with('error', 'unauthorized method!!');
        }
        $list = Child::all();
        return view('admin.child', ['list' => $list]) ;
    }

    public function reports()
    {
        if (\Auth::user()->role != 'admin') {
            return back()->with('error', 'unauthorized method!!');
        }
        $list = Report::all();
        return view('admin.reports', ['list' => $list]) ;
    }
}
