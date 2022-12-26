<?php /** @noinspection ALL */

/** @noinspection ALL */

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasAutocompleteSearch;
use App\Http\Controllers\Traits\HasDelete;
use App\Http\Controllers\Traits\HasList;
use App\Http\Controllers\Traits\SaveFile;
use App\Models\Category;
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

    public static function addWord($word, $title): bool
    {
        $category = (new Category)->where('title', $title)->first();
        if (!$category)
            return false;
        $wordCategory = new WordCategory([
            'word_id' => $word->id,
            'category_id' => $category->id,
        ]);
        $wordCategory->save();
        $word->wordCategories()->save($wordCategory);
        $category->wordCategories()->save($wordCategory);
        return true;
    }

    public function index(Request $request)
    {
        // return view('test', $this->getAll($request, 'categories', 10000));
        return view('word_category',  $this->getAll($request, 'categories', 10000));
    }

    public function create(Request $request): RedirectResponse
    {
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
