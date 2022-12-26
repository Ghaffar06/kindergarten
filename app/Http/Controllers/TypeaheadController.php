<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TypeaheadController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function autocompleteSearch(Request $request): JsonResponse
    {
        /// 'query' is what the search field contains now , NAME IT CORRECTLY!
        $query = $request->get('query');
        $filterResult = (new Category)->where('title', 'LIKE', '%' . $query . '%')->get('title');
        return response()->json($filterResult);
    }
}
