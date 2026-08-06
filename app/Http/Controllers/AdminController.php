<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\ContactUs;

class AdminController extends Controller
{
    // READ: Tampil data Subscribers & Contacts
    public function index()
    {
        $subscribers = Subscriber::latest()->get();
        $contacts = ContactUs::latest()->get();
        return view('admin.dashboard', compact('subscribers', 'contacts'));
    }

    // UPDATE: Status pesan Contact Us (misal ubah jadi 'Sudah Dibaca')
    public function updateContactStatus($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->update(['status' => 'Sudah Dibaca']);
        return back()->with('success', 'Status pesan diperbarui.');
    }

    // DELETE: Hapus Subscriber
    public function destroySubscriber($id)
    {
        Subscriber::findOrFail($id)->delete();
        return back()->with('success', 'Subscriber berhasil dihapus.');
    }

    // DELETE: Hapus Pesan Contact
    public function destroyContact($id)
    {
        ContactUs::findOrFail($id)->delete();
        return back()->with('success', 'Pesan berhasil dihapus.');
    }
}