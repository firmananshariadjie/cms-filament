<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function show($slug){
        // Fetch service details based on slug
        $service = Service::where('slug', $slug)->firstOrFail();


        if (!$service) {
            abort(404);
        }

        return view('page.service', with(['service'=>$service]));
    }
}
