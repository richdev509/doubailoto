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
            'phone' => [
                'required',
                'string',
                'size:8',
                'regex:/^[2-5][0-9]{7}$/',
                'unique:driver_applications,phone'
            ],
            'has_whatsapp' => 'boolean',
        ], [
            'phone.required' => 'Nimewo telefòn obligatwa',
            'phone.size' => 'Nimewo telefòn dwe gen 8 chif',
            'phone.regex' => 'Nimewo telefòn dwe kòmanse ak 2, 3, 4 oswa 5',
            'phone.unique' => 'Nimewo sa deja anrejistre',
        ]);

        // Create driver application
        $application = DriverApplication::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'full_name' => $validated['first_name'] . ' ' . $validated['last_name'],
            'phone' => '+509' . $validated['phone'],
            'has_whatsapp' => $validated['has_whatsapp'] ?? true,
            'status' => 'pending',
            'payment_completed' => false,
        ]);

        return redirect()->route('driver.register.success');
    }
}
