<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\RedirectResponse;

trait HasDelete
{
    public function delete($id): RedirectResponse
    {
        if ($this->model::where('id', '=', $id)->delete()) {
            $this->cascadeDelete($id);
            return back()->with('success', 'deleted successfully');
        }
        return back()->with('error', 'failed!');
    }
}
