<?php


namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait HasList
{
    public function getAll(Request $request, $key, $count = 25)
    {
        $page = $request->get('page') !== null ? $request->get('page') : 1;
        $param = $request->get('search') !== null ? $request->get('search') : '';
        $offset = ($page - 1) * $count;
        $query = $this->model::where($this->mainColumn, 'LIKE', '%' . $param . '%');
        $max = max((integer) ((count($query->get()) + $count - 1) / $count), 1) ;
        $page = min($page, $max) ;
        return [
            $key => $query->limit($count)->offset($offset)->get(),
            'paginate_' . $key . '_page'=> $page ,
            'paginate_' . $key . '_last_page'=>  $max,
        ];
    }
}
