<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasAutocompleteSearch;
use App\Http\Controllers\Traits\HasDelete;
use App\Http\Controllers\Traits\HasList;
use App\Http\Controllers\Traits\SaveFile;
use App\Models\ChildWord;
use App\Models\Word;
use App\Models\WordPhoto;
use App\Models\WordVoiceRecord;
use Illuminate\Http\Request;

class WordController extends Controller
{

    use HasDelete;
    use HasAutocompleteSearch;
    use HasList;
    use SaveFile;

    private $model = Word::class;
    private $mainColumn = 'text';

    public function index(Request $request)
    {
        $words = $this->getAll($request);
        $child_id = -1;
        if ($child_id != -1) {
            foreach ($words as $word) {
                $word->learned = count(
                        ChildWord::where('word_id', $word->id)
                            ->where('user_id', $child_id)
                            ->get()
                    ) > 0;
            }
        }
        return view('test_word', ['words' => $words]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'score' => 'required',
            'image1' => 'required',
            'voice1' => 'required',
        ]);
        $word = new Word(request()->all());
        $word->save();

        $this->saveFilesToWord($request, $word,
            'voice', WordVoiceRecord::class, 'wordVoiceRecords'
        );
        $this->saveFilesToWord($request, $word,
            'image', WordPhoto::class, 'wordPhotos'
        );

        for ($i = 1; isset($request->{'category' . $i}); $i++) {
            $title = $request->{'category' . $i};
            CategoryController::addWord($word, $title);
        }

        $word->save();
        return back()->with('success', 'word added successfully');
    }

    private function saveFilesToWord($request, $word, $type, $model, $many)
    {
        for ($i = 1; isset($request->{$type . $i}); $i++) {
            $file = new $model([
                'url' => $this->saveFile(
                    $request->{$type . $i},
                    'images/data/word/' . $type,
                    $word->text . '_' . $i,
                ),
                'word_id' => $word->id,
            ]);
            $file->save();
            $word->{$many}()->save($file);
        }
        $word->save();
        return $word;
    }
}
