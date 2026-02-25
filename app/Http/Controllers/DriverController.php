<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DriverApplication;
use Illuminate\Support\Facades\Storage;

class DriverController extends Controller
{
    public function showRegistrationForm()
    {
        return view('driver-register');
    }

    public function showSuccess()
    {
        return view('driver-register-success');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'has_whatsapp' => 'boolean',
        ]);

        // Create driver application
        $application = DriverApplication::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'full_name' => $validated['first_name'] . ' ' . $validated['last_name'],
            'phone' => $validated['phone'],
            'has_whatsapp' => $validated['has_whatsapp'] ?? true,
            'status' => 'pending',
            'payment_completed' => false,
        ]);

        return redirect()->route('driver.register.success');
    }
}
