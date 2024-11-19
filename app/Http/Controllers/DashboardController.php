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
        $gallery_footer = Gallery::limit(6)->get();
        $gallery_categories = GalleryCategory::all();
        
        $teams = Team::limit(4)->get();
        
        $testimonials = Testimonial::all();
        
        $articles = Article::limit(4)->get();

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
                                            'gallery_footer' => $gallery_footer,                                     
                                        ]));
    }

    public function about() {
        $aboutContents = Content::where('category', 'about')->get();
        $teamContents = Content::where('category', 'team')->get();
        $teams = Team::all();
        $contacts = Contact::all();
        $gallery_footer = Gallery::limit(6)->get();

        return view('dashboard.about', with(['gallery_footer'=>$gallery_footer,'contacts'=>$contacts,'aboutContents'=>$aboutContents, 'teams'=>$teams, 'teamContents'=>$teamContents]));   
    }

    public function service() {
        $aboutContents = Content::where('category', 'about')->get();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $gallery_footer = Gallery::limit(6)->get();
        $gallery_categories = GalleryCategory::all();
        $serviceContents = Content::where('category', 'service')->get();
        $contacts = Contact::all();

        return view('dashboard.service', with(['contacts'=>$contacts,'services'=>$services, 'testimonials'=>$testimonials, 'serviceContents'=>$serviceContents, 'gallery_footer'=>$gallery_footer, 'aboutContents'=>$aboutContents]));   
    }

    public function event() {
        $aboutContents = Content::where('category', 'about')->get();
        $gallery_footer = Gallery::limit(6)->get();
        $galleries = Gallery::all();
        $gallery_categories = GalleryCategory::all();
        $eventContents = Content::where('category', 'event')->get();
        $contacts = Contact::all();
        

        return view('dashboard.event', with(['galleries' => $galleries,'aboutContents'=>$aboutContents,'contacts'=>$contacts,'gallery_footer'=>$gallery_footer, 'gallery_categories'=>$gallery_categories, 'eventContents'=>$eventContents]));
    }

    public function testimonial() {
        $testimonials = Testimonial::all();
        $testimonialContents = Content::where('category', 'testimonial')->get();
        $aboutContents = Content::where('category', 'about')->get();
        $contacts = Contact::all();
        $gallery_footer = Gallery::limit(6)->get();

        return view('dashboard.testimonial', with(['contacts'=>$contacts,'aboutContents'=>$aboutContents,'contacts'=>$contacts,'gallery_footer'=>$gallery_footer,'testimonials'=>$testimonials, 'testimonialContents'=>$testimonialContents]));
    }

    public function contact() {
        $contacts = contact::all();  
        $aboutContents = Content::where('category', 'about')->get();
        $contacts = Contact::all();
        $gallery_footer = Gallery::limit(6)->get();      
     
        return view('dashboard.contact', with(['contacts'=>$contacts,'contacts'=>$contacts,'aboutContents'=>$aboutContents,'gallery_footer'=>$gallery_footer,]));
    }

}
