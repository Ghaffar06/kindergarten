<?php



namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait HasList
{
    public function getAll(Request $request)
    {
        if ($param = $request->get('search')) {
            return $this->model::where($this->mainColumn, 'LIKE', '%' . $param . '%')
                ->get();
        } else {
            return $this->model::all();
        }
    }
}
