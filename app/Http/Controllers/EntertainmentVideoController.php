<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasAutocompleteSearch;
use App\Http\Controllers\Traits\HasDelete;
use App\Http\Controllers\Traits\HasList;
use App\Models\EntertainmentVideo;
use Illuminate\Http\Request;

class EntertainmentVideoController extends Controller
{
    use HasDelete;
    use HasAutocompleteSearch;
    use HasList;

    private $model = EntertainmentVideo::class;
    private $mainColumn = 'title';
    private $delete_permission = 'delete entertainment video';

    public function index(Request $request)
    {
        $authorization = RoleController::can('view entertainment video list');
        if ($authorization !== null) {
            return $authorization;
        }

        $all = $this->getAll($request, 'videos');

    }

    public function create(Request $request)
    {
        $authorization = RoleController::can('view entertainment video');
        if ($authorization !== null) {
            return $authorization;
        }

        $teacher_id = \Auth::user()->id;
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'cost' => 'required',
        ]);
        $entertainmentVideo = new EntertainmentVideo(request()->all());
        $entertainmentVideo->teacher_id = $teacher_id;
        $entertainmentVideo->save();
        return back()->with('success', 'video saved successfully');
    }

    private function cascadeDelete($id)
    {
    }
}
