<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function store(Request $request){
        $save = new ContactUs();
        $save->name = $request->name;
        $save->email = $request->email;
        $save->message = $request->message;

        $save->save();
        return redirect()->route('contact-show')->with('success', 'Message sent successfully');
    }
}
