<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasDelete;
use App\Http\Controllers\Traits\HasList;
use App\Http\Controllers\Traits\SaveFile;
use App\Models\LetterPhoto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    use HasDelete;
    use HasList;
    use SaveFile;

    private $model = LetterPhoto::class;
    private $mainColumn = 'letter';

    public function index($letter)
    {

        if (!ctype_alpha($letter) || strlen($letter) != 1)
            abort(404);

        return view('single_letter', [
            'letter' => $letter,
            'photos' => (new LetterPhoto)->whereRaw("BINARY `letter`= ?", [$letter])
                ->get(),
        ]);
//        return view('test_one_letter', [
//            'letter' => $letter,
//            'photos' => LetterPhoto::whereRaw("BINARY `letter`= ?", [$letter])
//                ->get(),
//        ]);
    }

    public function index2()
    {
        return view('letters');
    }

    public function create($letter, Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required',
        ]);
        $letter = new LetterPhoto([
            'letter' => $letter,
            'url' => $this->saveFile(
                $request->image,
                'images/data/letter/' . $letter,
                '',
            ),
        ]);
        $letter->save();
        return back()->with('success', 'photo added successfully');
    }


    private function cascadeDelete($id)
    {

    }

}
