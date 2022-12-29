<?php /** @noinspection ALL */

/** @noinspection ALL */

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasAutocompleteSearch;
use App\Http\Controllers\Traits\HasDelete;
use App\Http\Controllers\Traits\HasList;
use App\Http\Controllers\Traits\SaveFile;
use App\Models\Category;
use App\Models\Word;
use App\Models\WordCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use HasDelete;
    use HasAutocompleteSearch;
    use HasList;
    use SaveFile;

    private $model = Category::class;
    private $mainColumn = 'title';

    public static function addWord(Word $word, Category $category)
    {
        $wordCategory = new WordCategory([
            'word_id' => $word->id,
            'category_id' => $category->id,
        ]);
        $wordCategory->save();
        $word->wordCategories()->save($wordCategory);
        $category->wordCategories()->save($wordCategory);
    }

    public function index(Request $request)
    {
        $authorization = RoleController::can('view category list');
        if ($authorization !== null) {
            return $authorization;
        }

//         return view('test', $this->getAll($request, 'categories', 10000));
        return view('word_category', $this->getAll($request, 'categories', 10000));
    }

    public function create(Request $request): RedirectResponse
    {
        $authorization = RoleController::can('create category');
        if ($authorization !== null) {
            return $authorization;
        }


        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required',
            'title' => 'required',
        ]);
        $category = new Category(request()->all());
        $category->url = $this->saveFile($request->image, 'images/data/category', $category->title);
        $category->save();
        return back()->with('success', 'category added successfully');
    }

    private function cascadeDelete($id)
    {

    }

}
