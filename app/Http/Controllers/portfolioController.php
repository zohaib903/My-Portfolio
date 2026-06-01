<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|min:10|max:2000',
        ]);

        // ✅ Array ki jagah alag alag strings pass karo
        Mail::to('zohaiblatif006@gmail.com')->send(
            new ContactMail(
                $validated['name'],
                $validated['email'],
                $validated['subject'],
                $validated['message']
            )
        );

        return redirect()->route('home')
            ->with('success', 'Thank you ' . $validated['name'] . '! Your message has been received. I will get back to you soon.')
            ->withFragment('contact');
    }
}