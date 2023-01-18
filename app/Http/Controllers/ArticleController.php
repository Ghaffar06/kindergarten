<?php /** @noinspection ALL */

/** @noinspection ALL */

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasAutocompleteSearch;
use App\Http\Controllers\Traits\HasDelete;
use App\Http\Controllers\Traits\HasList;
use App\Models\Article;
use App\Models\ArticleQuestion;
use App\Models\ChildArticle;
use App\Models\Teacher;
use App\Models\User;
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
    private $delete_permission = 'delete article';

    public function index(Request $request)
    {
        $authorization = RoleController::can('view article list');
        if ($authorization !== null) {
            return $authorization;
        }

        $user_id = RoleController::get_user_id();
        if ($user_id != -1) {
            if (\Auth::user()->role == 'teacher')
                $teacher_id = $user_id;
            else
                $teacher_id = -1;
            if (\Auth::user()->role == 'student')
                $child_id = $user_id;
            else
                $child_id = -1;
        }

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
            $article->teacher = (new User)->where('id', '=', (new Teacher)->where('id', '=', $article->teacher_id)->first('user_id'))->first('name');
            $article->temp = (new Teacher)->where('id', '=', $article->teacher_id)->first('user_id');
        }
//        return view('test_articles', $all);
        return view('articles', $all);
    }

    public function getArticle(Article $article)
    {
        $authorization = RoleController::can('view article details');
        if ($authorization !== null) {
            return $authorization;
        }

        if (Session::get('article') != null)
            $article = Session::get('article');
        return view('single_article', ['article' => $article]);
    }

    public function getCreateFrom()
    {
        $authorization = RoleController::can('create article');
        if ($authorization !== null) {
            return $authorization;
        }

        return view('add_new_article');
    }

    public function validateArticle(Article $article, Request $request): RedirectResponse
    {
        $authorization = RoleController::can('submit answers\'s article');
        if ($authorization !== null) {
            return $authorization;
        }

        $child_id = \Auth::user()->id;
        $score = 0;
        foreach ($article->articleQuestions as $question) {
            $checked = $request->{$question->id} == 'on' ? 1 : 0;
            if ($checked == $question->answer)
                $score++;
            $question->flag = $checked;
        }
        $score *= 100 / count($article->articleQuestions);

        $childArticle = (new ChildArticle)->where('article_id', '=', $article->id)
            ->where('child_id', '=', $child_id)
            ->first();
        if ($childArticle == null)
            $childArticle = new ChildArticle([
                'child_id' => $child_id,
                'article_id' => $article->id,
                'max_score' => 0,
            ]);
        $delta = max(0, $score - $childArticle->max_score);

        if ($delta > 0) {
            $childArticle->max_score += $delta;
            $childArticle->save();
            $article->childArticles()->save($childArticle);
            // TODO::child should save the result also!.
        }

        $article->last_score = $score;
        $article->score = max($score, $article->score);

        return back()->with(['article' => $article]);
    }

    public function create(Request $request): RedirectResponse
    {
        $authorization = RoleController::can('create article');
        if ($authorization !== null) {
            return $authorization;
        }

        $teacher_id = \Auth::user()->id;

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
