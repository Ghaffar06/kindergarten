<?php /** @noinspection ALL */

/** @noinspection ALL */

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
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WordController extends Controller
{

    use HasDelete;
    use HasAutocompleteSearch;
    use HasList;
    use SaveFile;

    private $model = Word::class;
    private $mainColumn = 'text';

    public function index(Category $category, Request $request)
    {
        $authorization = RoleController::can('view word list');
        if ($authorization !== null) {
            return $authorization;
        }

        $all = $this->getAll($request, 'words', 10, $this->getQueryWords($category));
        $user_id = RoleController::get_user_id();
        if ($user_id != -1)
            if (\Auth::user()->role == 'student')
                $child_id = $user_id ;
            else
                $child_id = -1 ;

        if ($child_id != -1) {
            foreach ($all['words'] as $word) {
                $word->learned = count(
                        (new ChildWord)->where('word_id', $word->id)
                            ->where('child_id', $child_id)
                            ->get()
                    ) > 0;
            }
        }
        return view('words', array_merge(
                $all, ['category' => $category, 'categories' => Category::all()]
            )
        );
//        return view('test_word', array_merge($all, ['category' => $category]));
    }

    private function getQueryWords(Category $category)
    {
        $category_id = $category->id ;
        return (new Word)->whereIn('id',
            (new WordCategory)->select('word_id')
                ->where('category_id', '=', $category_id)
                ->get()
                ->toArray()
        );
    }

    public function createForm()
    {
        $authorization = RoleController::can('create word');
        if ($authorization !== null) {
            return $authorization;
        }

        return view('add_new_word', ['categories' => Category::all()]);
    }

    public function create(Request $request): RedirectResponse
    {
        $authorization = RoleController::can('create word');
        if ($authorization !== null) {
            return $authorization;
        }

        $request->validate([
            'text' => 'required',
            'score' => 'required',
            'image1' => 'required',
            'voice1' => 'required',
            'category1' => 'required',
        ]);

        $word = new Word(request()->all());
        $word->save();
        $this->saveAttachments($request, $word);
//        return back()->with('success', 'word added successfully');
        return redirect()->route('word.learn', ['category' => $request->category1, 'id' => $word->id]);
    }

    private function saveAttachments(Request $request,Word $word)
    {
        $this->saveFilesToWord($request, $word,
            'voice', WordVoiceRecord::class, 'wordVoiceRecords'
        );
        $this->saveFilesToWord($request, $word,
            'image', WordPhoto::class, 'wordPhotos'
        );

        for ($i = 1; isset($request->{'category' . $i}); $i++) {
            $category_id = $request->{'category' . $i};
            CategoryController::addWord($word, $category_id);
        }
        $word->save();
    }

    private function saveFilesToWord(Request $request,Word $word,string $type, $model, $many)
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

    public function updateWord(Request $request): RedirectResponse
    {
        $authorization = RoleController::can('update word details');
        if ($authorization !== null) {
            return $authorization;
        }

        $request->validate([
            'text' => 'required',
            'score' => 'required',
            'image1' => 'required',
            'voice1' => 'required',
            'category1' => 'required',
        ]);
        $word = (new Word)->where('id', '=', $request->id)->first();
        $this->cascadeDelete($request->id);
        $this->saveAttachments($request, $word);
        return back()->with('success', 'word added successfully');
    }

    private function cascadeDelete(int $id)
    {
        (new WordCategory)->where('word_id', '=', $id)->delete();
        (new WordVoiceRecord)->where('word_id', '=', $id)->delete();
        (new WordCategory)->where('word_id', '=', $id)->delete();
    }

    public function generateTest(Category $category)
    {
        $authorization = RoleController::can('take words test');
        if ($authorization !== null) {
            return $authorization;
        }

        $child_id = \Auth::user()->id;
        $x = 10;
        $wordsF = $this->getNotLearned($this->getQueryWords($category), $child_id)->limit($x)->get();
        $wordsT = $this->getLearned($this->getQueryWords($category), $child_id)->get();

        $voiceQuestions = [];
        $photoQuestions = [];
        foreach ($wordsF as $word) {
            $keyVoice = rand(0, count($word->wordVoiceRecords) - 1);
            $temp = new Word();
            $temp->text = $word->text;
            $temp->voice = $word->wordVoiceRecords[$keyVoice]->url;
            $voiceQuestions[] = $temp;

            $temp = new Word();
            $temp->text = $word->text;
            $photos = [];
            for ($i = 0; $i < 4; $i++) {
                $photo = new Word();
                $wordRandom = $word;
                if ($i > 0) {
                    $wordRandom = null;
                    while ($wordRandom == null) {
                        if (rand(0, 1) == 1 && count($wordsF) != 0)
                            $wordRandom = $wordsF[rand(0, count($wordsF) - 1)];
                        else
                            if (count($wordsT) != 0)
                                $wordRandom = $wordsT[rand(0, count($wordsT) - 1)];
                        if ($wordRandom != null && $wordRandom->text == $word->text)
                            $wordRandom = null;
                    }
                    $photo->correct = false;
                } else
                    $photo->correct = true;

                $photo->url = $wordRandom->wordPhotos[rand(0, count($wordRandom->wordPhotos) - 1)]->url;
                $photos [] = $photo;
            }
            shuffle($photos);
            $temp->photos = $photos;
            $photoQuestions [] = $temp;
        }

        shuffle($voiceQuestions);
        shuffle($photoQuestions);
        return view('category_test', [
            'voiceQuestions' => $voiceQuestions,
            'photoQuestions' => $photoQuestions,
            'category' => $category
        ]);
    }

    private function getNotLearned($query, $child_id, $flag = true)
    {
        if (!$flag)
            return $query;
        return $query->whereNotIn(
            'id',
            (new ChildWord)->select('word_id')
                ->where('child_id', '=', $child_id)
                ->get()
                ->toArray()
        );
    }

    private function getLearned($query, $child_id)
    {
        return $query->whereIn(
            'id',
            (new ChildWord)->select('word_id')
                ->where('child_id', '=', $child_id)
                ->get()
                ->toArray()
        );
    }

    public function getLearningWord(Category $category, $id, Request $request)
    {
        $authorization = RoleController::can('view word details');
        if ($authorization !== null) {
            return $authorization;
        }

        $user_id = RoleController::get_user_id();
        if ($user_id != -1)
            if (\Auth::user()->role == 'student')
                $child_id = $user_id ;
            else
                $child_id = -1 ;

        $direction = $request->get('query') !== null ? $request->get('query') : 0;
        $query = $this->getNotLearned($this->getQueryWords($category), $direction != 0);
        $word = $query->orderBy('id', $direction < 0 ? 'desc' : 'asc')
            ->where('id', $direction == 1 ? '>' : ($direction == -1 ? '<' : '='), $id)
            ->first();

        return view('single_word', [
            'word' => $word,
            'nextable' => $this->checkWord(
                $this->getNotLearned($this->getQueryWords($category), $child_id),
                $word->id,
                1),
            'previousable' => $this->checkWord(
                $this->getNotLearned($this->getQueryWords($category), $child_id),
                $word->id,
                -1),
            'category' => $category,
        ]);
//        return view('test_one_word', [
//            'word' => $word,
//            'nextable' => $this->checkWord(
//                $this->getNotLearned($this->getQueryWords($category), $child_id),
//                $word->id,
//                1),
//            'previousable' => $this->checkWord(
//                $this->getNotLearned($this->getQueryWords($category), $child_id),
//                $word->id,
//                -1),
//            'category' => $category,
//        ]);
    }

    private function checkWord($query, $id, $direction): bool
    {
        return count(
                $query->orderBy('id', $direction < 0 ? 'desc' : 'asc')
                    ->where('id', $direction == 1 ? '>' : ($direction == -1 ? '<' : '='), $id)
                    ->get()
            ) > 0;
    }
}
