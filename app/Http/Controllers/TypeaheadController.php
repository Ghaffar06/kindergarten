<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
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
          $filterResult = Category::where('name', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    } 
}
