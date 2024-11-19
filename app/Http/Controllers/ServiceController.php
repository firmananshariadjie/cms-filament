<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Content;
use App\Models\Contact;
use App\Models\Gallery;

class ServiceController extends Controller
{
    public function show($slug){
        // Fetch service details based on slug
        $service = Service::where('slug', $slug)->firstOrFail();
        $aboutContents = Content::where('category', 'about')->get();
        $contacts = Contact::all();
        $gallery_footer = Gallery::limit(6)->get();


        if (!$service) {
            abort(404);
        }

        return view('page.service', with(['service'=>$service,'aboutContents'=>$aboutContents,'contacts'=>$contacts,'gallery_footer'=>$gallery_footer]));
    }
}
