<?php

namespace App\Http\Controllers;

use App\Models\Category;
use http\Env\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('test',['temp' => Category::all()]);
    }
    public function add(\Illuminate\Http\Request $request){
        $category =  new Category(request()->all());
        $category->save();
        return back();
    }
    public function delete( $id){
        if (Category::where('id', $id)->delete())
            return back()->with('success', 'deleted successfully');
        else
            return back()->with('success', 'failed!');
    }
}
