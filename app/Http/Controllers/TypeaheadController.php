<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Artisan;

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
        $filterResult = Category::where('title', 'LIKE', '%'. $query. '%')->get('title');
        return response()->json($filterResult);
    }
}
