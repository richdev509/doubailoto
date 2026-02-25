<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|in:support,driver,security,billing,suggestion,other',
            'message' => 'required|string|min:10',
        ]);

        Contact::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'status' => 'new',
        ]);

        return redirect()->route('contact')
            ->with('success', 'Mesaj ou a voye avèk siksè! Nou pral kontakte w byento sou WhatsApp.');
    }
}
