<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\ContactUs;

class TransController extends Controller
{
    // CREATE Subscriber dari Form Coming Soon
    public function storeSubscriber(Request $request)
    {
        $request->validate(['email' => 'required|email|unique:subscribers,email']);
        
        Subscriber::create(['email' => $request->email]);

        return back()->with('success', 'Email berhasil didaftarkan untuk notifikasi!');
    }

    // CREATE Pesan dari Modal Contact Us
    public function storeContact(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:150',
            'email' => 'required|email',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        ContactUs::create($request->all());

        return back()->with('success', 'Pesan Anda berhasil dikirim ke tim Trans F&B!');
    }
}