<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class TestController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();

        return view('welcome', compact('categories','posts'));
    }

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Post::class, 'name','description')
            ->registerModel(Category::class, 'name')
            ->perform($request->input('query'));

        return view('search', compact('searchResults'));
    }
}
