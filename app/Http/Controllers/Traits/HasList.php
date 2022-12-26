<?php


namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait HasList
{
    public function getAll(Request $request, $key, $count = 25, $query = null)
    {
        $page = $request->get('page') !== null ? $request->get('page') : 1;
        $offset = ($page - 1) * $count;
        $query1 = $this->__getAll($request, $key, $count, $query);
        $query2 = $this->__getAll($request, $key, $count, $query);

        $max = max((integer)((count($query1->get()) + $count - 1) / $count), 1);
        $page = min($page, $max);
        return [
            $key => $query2->limit($count)->offset($offset)->get(),
            'paginate_' . $key . '_page' => $page,
            'paginate_' . $key . '_last_page' => $max,
        ];
    }

    private function __getAll(Request $request, $key, $count, $query)
    {
        $param = $request->get('search') !== null ? $request->get('search') : '';
        if ($query == null) {
            $query = $this->model::where($this->mainColumn, 'LIKE', '%' . $param . '%');
        } else {
            $query = $query->where($this->mainColumn, 'LIKE', '%' . $param . '%');
        }

        return $query;
    }
}
