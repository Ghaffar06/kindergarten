<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\HasAutocompleteSearch;
use App\Http\Controllers\Traits\HasDelete;
use App\Http\Controllers\Traits\HasList;
use App\Http\Controllers\Traits\SaveFile;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use HasDelete;
    use HasAutocompleteSearch;
    use HasList;
    use SaveFile;

    private $model = Category::class;
    private $mainColumn = 'title' ;

    public function index(Request $request)
    {
        return view('test', ['categories' => $this->getAll($request)]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required',
            'title' => 'required',
        ]);
        $category = new Category(request()->all());
        $category->url = $this->saveFile($request->image, 'images/data/category' , $category->title);
        $category->save();
        return back()->with('success', 'category added successfully');
    }

}
