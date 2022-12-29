<?php /** @noinspection ALL */

/** @noinspection ALL */

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasAutocompleteSearch;
use App\Http\Controllers\Traits\HasDelete;
use App\Http\Controllers\Traits\HasList;
use App\Models\Article;
use App\Models\ArticleQuestion;
use App\Models\ChildArticle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class ArticleController extends Controller
{
    use HasDelete;
    use HasAutocompleteSearch;
    use HasList;

    private $model = Article::class;
    private $mainColumn = 'title';

    public function index(Request $request)
    {
        $teacher_id = 2;
        $child_id = 1;

        $query = null;
        $onlyMe = $request->get('only_me') !== null && strtolower($request->get('only_me')) === 'true';
        if ($onlyMe && $teacher_id != -1) {
            $query = (new Article)->where('teacher_id', '=', $teacher_id);
        }

        $all = $this->getAll($request, 'articles', 10, $query);

        foreach ($all['articles'] as $article) {
            if ($child_id != -1) {
                $score = (new ChildArticle)->where('article_id', '=', $article->id)
                    ->where('child_id', '=', $child_id)
                    ->first('max_score');
                if ($score != null)
                    $article->score = $score->score;
                else
                    $article->score = 0;
            }
            $article->short = substr($article->text, 0, 30);
        }
//        return view('test_articles', $all);
        return view('articles', $all);
    }

    public function getArticle(Article $article)
    {
        if (Session::get('article') != null)
            $article = Session::get('article');
        return view('single_article', ['article' => $article]);
    }

    public function getCreateFrom()
    {
        return view('add_new_article');
    }

    public function validateArticle($id, Request $request): RedirectResponse
    {
        $article = (new Article)->where('id', $id)->first();
        $child_id = 1;
        $score = 0;
        foreach ($article->articleQuestions as $question) {
            $checked = $request->{$question->id} == 'on' ? 1 : 0;
            if ($checked == $question->answer)
                $score++;
            $question->flag = $checked;
        }
        $score *= 100 / count($article->articleQuestions);

        $childArticle = (new ChildArticle)->where('article_id', '=', $id)
            ->where('child_id', '=', $child_id)
            ->first();
        if ($childArticle == null)
            $childArticle = new ChildArticle([
                'child_id' => $child_id,
                'article_id' => $id,
                'max_score' => 0,
            ]);
        $delta = max(0, $score - $childArticle->max_score);

        if ($delta > 0) {
            $childArticle->max_score += $delta;
            $childArticle->save();
            (new Article)->where('id', $id)->first()->childArticles()->save($childArticle);
            // TODO::child should save the result also!.
        }

        $article->last_score = $score;
        $article->score = max($score, $article->score);

        return back()->with(['article' => $article]);
    }

    public function create(Request $request): RedirectResponse
    {
        $teacher_id = 1;
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'question1' => 'required',
        ]);

        $article = new Article(request()->all());
        $article->teacher_id = $teacher_id;
        $article->text = str_replace(array("\r\n", "\n", "\r"), '<br>', $article->text);
        $article->save();
        for ($i = 1; isset($request->{'question' . $i}); $i++) {
            $articleQuestion = new ArticleQuestion([
                'option' => $request->{'question' . $i},
                'answer' => ($request->{'answer' . $i} == 'on' ? 1 : 0),
                'article_id' => $article->id,
            ]);
            $articleQuestion->save();
            $article->articleQuestions()->save($articleQuestion);
        }
        return redirect()->route('article.single_article', ['article' => $article->id]);
//        return back()->with('success', 'word added successfully');
    }

    private function cascadeDelete($id)
    {
        (new ArticleQuestion)->where('article_id', '=', $id)->delete();
    }

}
