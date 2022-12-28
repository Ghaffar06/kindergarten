<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasAutocompleteSearch;
use App\Http\Controllers\Traits\HasDelete;
use App\Http\Controllers\Traits\HasList;
use App\Models\EntertainmentVideo;
use App\Models\Teacher;
use Illuminate\Http\Request;

class EntertainmentVideoController extends Controller
{
    use HasDelete;
    use HasAutocompleteSearch;
    use HasList;

    private $model = EntertainmentVideo::class;
    private $mainColumn = 'title';
    public function index(Request $request)
    {
        $all = $this->getAll($request, 'videos');

    }

    public function create(Request $request) {
        $teacher_id = 1;
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
