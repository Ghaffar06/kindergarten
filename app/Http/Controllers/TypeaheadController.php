<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TypeaheadController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function autocompleteSearch(Request $request)
    {
        /// 'query' is what the search field contains now , NAME IT CORRECTLY!
        $query = $request->get('query');
        $filterResult = Category::where('title', 'LIKE', '%' . $query . '%')->get('title');
        return response()->json($filterResult);
    }
}
