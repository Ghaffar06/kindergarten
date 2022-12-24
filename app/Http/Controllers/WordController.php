<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasAutocompleteSearch;
use App\Http\Controllers\Traits\HasDelete;
use App\Http\Controllers\Traits\HasList;
use App\Http\Controllers\Traits\SaveFile;
use App\Models\Category;
use App\Models\Word;
use App\Models\WordCategory;
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
        return view('test_word', ['words' => $this->getAll($request)]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'score' => 'required',
        ]);
        $word = new Word(request()->all());
        $word->save();

        $word = $this->saveFilesToWord($request, $word,
            'voice', WordVoiceRecord::class, 'wordVoiceRecords'
        );
        $word = $this->saveFilesToWord($request, $word,
            'image', WordPhoto::class, 'wordPhotos'
        );

        for ($i = 1 ; isset($request->{'category' . $i}) ; $i ++) {
            $title = $request->{'category' . $i};
            $category = Category::where('title', $title)->first();
            $wordCategory = new WordCategory([
                'word_id' => $word->id,
                'category_id' => $category->id,
            ]);
            $wordCategory->save();
            $word->wordCategories()->save($wordCategory);
            $category->wordCategories()->save($wordCategory);
        }

        $word->save();
        return back()->with('success', 'category added successfully');
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
