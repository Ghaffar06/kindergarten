<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = [];
        if ($title = $request->get('search')) {
            $categories = Category::where('title', 'LIKE', '%' . $title . '%')
                ->get();
        } else {
            $categories = Category::all();
        }
        return view('test', ['categories' => $categories]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required',
            'title' => 'required',
        ]);
        $category = new Category(request()->all());
        $category->url = $category->title . time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/data/category'), $category->url);
        $category->url = 'images/data/category/' . $category->url;
        $category->save();
        return back()->with('success', 'category added successfully');
    }

    public function delete($id)
    {
        if (Category::where('id', '=', $id)->delete())
            return back()->with('success', 'deleted successfully');
        return back()->with('error', 'failed!');
    }

    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Category::where('title', 'LIKE', '%' . $query . '%')->get('title');
        return response()->json($filterResult);
    }
}
