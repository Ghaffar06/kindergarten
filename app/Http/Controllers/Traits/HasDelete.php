<?php

namespace App\Http\Controllers\Traits;

trait HasDelete
{
    public function delete($id)
    {
        if ($this->model::where('id', '=', $id)->delete())
            return back()->with('success', 'deleted successfully');
        return back()->with('error', 'failed!');
    }
}
