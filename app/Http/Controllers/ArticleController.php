<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Content;
use App\Models\Contact;
use App\Models\Gallery;

class ArticleController extends Controller
{
    public function show($slug) {
        $article = Article::where('slug', $slug)->first();
        $aboutContents = Content::where('category', 'about')->get();
        $contacts = Contact::all();
        $gallery_footer = Gallery::limit(6)->get();

        if (!$article) {
            abort(404);
        }

        return view('page.article', with(['article'=>$article,'aboutContents'=>$aboutContents,'contacts'=>$contacts,'gallery_footer'=>$gallery_footer]));
    }
}
