<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Article;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index(){
        $bannerContents = Content::where('category', 'banner')->get();

        $aboutContents = Content::where('category', 'about')->get();

        $serviceContents = Content::where('category', 'service')->get();
        
        $eventContents = Content::where('category', 'event')->get(); 

        $teamContents = Content::where('category', 'team')->get();
        
        $testimonialContents = Content::where('category', 'testimonial')->get();
        
        $articleContents = Content::where('category', 'article')->get();

        $services = Service::all();

        $galleries = Gallery::limit(8)->get();
        $gallery_categories = GalleryCategory::all();
        
        $teams = Team::limit(4)->get();
        
        $testimonials = Testimonial::all();
        
        $articles = Article::all();

        $contacts = Contact::all();

        // Kirim data ke view
        return view('dashboard.index', with(['bannerContents' => $bannerContents, 
                                            'aboutContents' => $aboutContents,
                                            'serviceContents' => $serviceContents, 
                                            'eventContents' => $eventContents, 
                                            'teamContents' => $teamContents,   
                                            'testimonialContents' => $testimonialContents,
                                            'articleContents' => $articleContents,                                             
                                            'services' => $services,
                                            'galleries' => $galleries,
                                            'gallery_categories' => $gallery_categories,
                                            'teams' => $teams,
                                            'testimonials' => $testimonials,
                                            'articles' => $articles,  
                                            'contacts' => $contacts,                                      
                                        ]));
    }

    public function about() {
        $aboutContents = Content::where('category', 'about')->get();
        $teamContents = Content::where('category', 'team')->get();
        $teams = Team::all();

        return view('dashboard.about', with(['aboutContents'=>$aboutContents, 'teams'=>$teams, 'teamContents'=>$teamContents]));   
    }

    public function service() {
        $services = Service::all();
        $testimonials = Testimonial::all();
        $galleries = Gallery::all();
        $gallery_categories = GalleryCategory::all();
        $serviceContents = Content::where('category', 'service')->get();

        return view('dashboard.service', with(['services'=>$services, 'testimonials'=>$testimonials, 'serviceContents'=>$serviceContents]));   
    }

    public function event() {
        $galleries = Gallery::all();
        $gallery_categories = GalleryCategory::all();
        $eventContents = Content::where('category', 'event')->get();

        return view('dashboard.event', with(['galleries'=>$galleries, 'gallery_categories'=>$gallery_categories, 'eventContents'=>$eventContents]));
    }

    public function testimonial() {
        $testimonials = Testimonial::all();
        $testimonialContents = Content::where('category', 'testimonial')->get();
     
        return view('dashboard.testimonial', with(['testimonials'=>$testimonials, 'testimonialContents'=>$testimonialContents]));
    }


}
