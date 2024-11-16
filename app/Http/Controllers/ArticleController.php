<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($slug) {
        $article = Article::where('slug', $slug)->first();

        if (!$article) {
            abort(404);
        }

        return view('page.article', compact('article'));
    }
}
