<?php

namespace App\Http\Controllers\Traits;

use App\Http\Controllers\RoleController;
use Illuminate\Http\RedirectResponse;

trait HasDelete
{
    public function delete($id): RedirectResponse
    {
        $authorization = RoleController::can($this->delete_permission);
        if ($authorization !== null) {
            return $authorization;
        }
        if ($this->model::where('id', '=', $id)->delete()) {
            $this->cascadeDelete($id);
            return back()->with('success', 'deleted successfully');
        }
        return back()->with('error', 'failed!');
    }
}
