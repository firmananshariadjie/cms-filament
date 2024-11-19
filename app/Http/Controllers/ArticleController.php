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
        // Ambil artikel berdasarkan slug
        $article = Article::where('slug', $slug)->firstOrFail(); // Gunakan firstOrFail agar otomatis menangani 404

        // Ambil data pendukung lainnya
        $aboutContents = Content::where('category', 'about')->get();
        $contacts = Contact::all();
        $gallery_footer = Gallery::take(6)->get(); // Gunakan take() untuk pembatasan data

        // return view('page.article', with(['article'=>$article,'aboutContents'=>$aboutContents,'contacts'=>$contacts,'gallery_footer'=>$gallery_footer]));
        return view('page.article', compact('article', 'aboutContents', 'contacts', 'gallery_footer'));
    }
}
