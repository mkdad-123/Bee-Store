<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function showArticles (){

        $articles = Article::all();

        return view('articles' , compact('articles'));
    }

    public function showArticleContent($id)

    {
        $article = Article::with('images')->findOrFail($id);

        if (!$article) {
            abort(404, 'not found');
        }

        return view('articles.detailes', compact('article'));
    }

    public function searchArticle(Request $request)
    {
        $keyword = $request->query('keyword');

        $articles = Article::where('title', 'like', '%' . $keyword . '%')->get();

        return view('articles.search', compact('articles', 'keyword'));
    }
}
