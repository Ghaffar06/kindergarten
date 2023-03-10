<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

trait HasAutocompleteSearch
{
    public function autocompleteSearch(Request $request): JsonResponse
    {
        $query = $request->get('query');
        $filterResult = $this->model::where($this->mainColumn, 'LIKE', '%' . $query . '%')->get('title');
        return response()->json($filterResult);
    }
}
