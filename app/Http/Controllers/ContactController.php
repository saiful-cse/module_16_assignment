<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $validated  = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        //Log the input
        Log::info('Contact Form Submission:', $validated);

         // Flash success message to session
        Session::flash('success', 'Your message has been submitted successfully!');
        // Redirect with data to confirmation page
        return redirect()->route('contact.confirmation')->with('data', $validated);

    }

    public function confirmation()
    {
        $data = session('data');
        return view('contact.confirmation', compact('data'));
    }
}
