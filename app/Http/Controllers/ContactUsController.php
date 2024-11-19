<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Filament\Notifications\Notification;


class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simpan data
        ContactUs::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()
            ->route('contact-show')
            ->with('success', 'Akan Kami Response');
    }
}
