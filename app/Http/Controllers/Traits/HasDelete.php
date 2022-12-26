<?php

namespace App\Http\Controllers\Traits;

trait HasDelete
{
    public function delete($id)
    {
        if ($this->model::where('id', '=', $id)->delete()) {
            $this->cascadeDelete($id);
            return back()->with('success', 'deleted successfully');
        }
        return back()->with('error', 'failed!');
    }
}
