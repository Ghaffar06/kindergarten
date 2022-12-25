<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasAutocompleteSearch;
use App\Http\Controllers\Traits\HasDelete;
use App\Http\Controllers\Traits\HasList;
use App\Http\Controllers\Traits\SaveFile;
use App\Models\Category;
use App\Models\ChildWord;
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

    public function index($category, Request $request)
    {
        $all = $this->getAll($request, 'words', 10 , $this->getQueryWords($category) );
        $child_id = 1;
        if ($child_id != -1) {
            foreach ($all['words'] as $word) {
                $word->learned = count(
                        ChildWord::where('word_id', $word->id)
                            ->where('user_id', $child_id)
                            ->get()
                    ) > 0;
            }
        }
        return view('test_word', array_merge($all, ['category'=>$category]));
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

    public function getLearningWord($category, $id, Request $request)
    {
        $child_id = 1;
        $direction = $request->get('query') !== null ? $request->get('query') : 0;
        $query = $this->getNotLearned($this->getQueryWords($category), $direction != 0) ;
        $word = $query->orderBy('id', $direction < 0 ? 'desc' : 'asc')
            ->where('id', $direction == 1 ? '>' :( $direction == -1 ? '<' : '='), $id)
            ->first();


        return view('test_one_word', [
            'word' => $word,
            'nextable' => $this->checkWord(
                $this->getNotLearned($this->getQueryWords($category), $child_id ),
                $word->id,
                1),
            'previousable' => $this->checkWord(
                $this->getNotLearned($this->getQueryWords($category) , $child_id),
                $word->id,
                -1),
            'category' => $category,
        ]);
    }

    private function getQueryWords($category) {

        $category_id = Category::where('title', '=', $category)->first('id')['id'];
        return Word::whereIn('id',
            WordCategory::select('word_id')
                ->where('category_id', '=', $category_id)
                ->get()
                ->toArray()
        );
    }

    private function getNotLearned($query, $child_id , $flag = true) {
        if (! $flag)
            return $query;
        return $query->whereNotIn(
            'id',
            ChildWord::select('word_id')
                ->where('user_id', '=', $child_id)
                ->get()
                ->toArray()
        );
    }

    private function checkWord($query, $id, $direction)
    {
        return count(
            $query->orderBy('id', $direction < 0 ? 'desc' : 'asc')
                ->where('id', $direction == 1 ? '>' : ($direction == -1 ? '<' : '='), $id)
                ->get()
        ) > 0 ;
    }


}
