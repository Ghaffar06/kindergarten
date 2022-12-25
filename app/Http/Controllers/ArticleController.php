<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasAutocompleteSearch;
use App\Http\Controllers\Traits\HasDelete;
use App\Http\Controllers\Traits\HasList;
use App\Http\Controllers\Traits\SaveFile;
use App\Models\Article;
use App\Models\ChildArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    use HasDelete;
    use HasAutocompleteSearch;
    use HasList;
    use SaveFile;

    private $model = Article::class;
    private $mainColumn = 'title';

    public function index(Request $request)
    {
        $all = $this->getAll($request, 'articles', 10);
        $child_id = 1;
        if ($child_id != -1) {
            foreach ($all['articles'] as $article) {
                $score = ChildArticle::where('article_id', '=' , $article->id)
                    ->where('user_id' , '=' , $child_id)
                    ->first('max_score');
                if ($score != null)
                    $article->score = $score->score;
                else
                    $article->score = 0 ;
                $article->short = substr($article->text , 30) ;
            }
        }
        return view('test_articles', $all);
    }

}
