<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DriverApplication;
use App\Models\Contact;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalDrivers = DriverApplication::count();
        $pendingDrivers = DriverApplication::where('status', 'pending')->count();
        $approvedDrivers = DriverApplication::where('status', 'approved')->count();
        $paidDrivers = DriverApplication::where('payment_completed', true)->count();

        $totalContacts = Contact::count();
        $newContacts = Contact::where('status', 'new')->count();

        return view('admin.dashboard', compact(
            'totalDrivers',
            'pendingDrivers',
            'approvedDrivers',
            'paidDrivers',
            'totalContacts',
            'newContacts'
        ));
    }

    public function drivers()
    {
        $drivers = DriverApplication::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.drivers', compact('drivers'));
    }

    public function togglePayment($id)
    {
        $driver = DriverApplication::findOrFail($id);
        $driver->payment_completed = !$driver->payment_completed;
        $driver->save();

        return redirect()->back()->with('success', 'Estati peman chofè a mete ajou!');
    }

    public function approveDriver($id)
    {
        $driver = DriverApplication::findOrFail($id);
        $driver->status = 'approved';
        $driver->approved_at = now();
        $driver->save();

        return redirect()->back()->with('success', 'Chofè apwouve avèk siksè!');
    }

    public function rejectDriver(Request $request, $id)
    {
        $driver = DriverApplication::findOrFail($id);
        $driver->status = 'rejected';
        $driver->rejection_reason = $request->input('reason', 'Non spesifye');
        $driver->save();

        return redirect()->back()->with('success', 'Chofè rejte!');
    }

    public function contacts()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.contacts', compact('contacts'));
    }

    public function updateContactStatus(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->status = $request->input('status');

        if ($request->filled('response')) {
            $contact->response = $request->input('response');
            $contact->responded_at = now();
        }

        $contact->save();

        return redirect()->back()->with('success', 'Estati mesaj la mete ajou!');
    }
}
