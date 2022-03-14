<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    // public function store(Request $request)
    // {
    //     return "Halaman Post Kontak ke backend";
    // }
    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->back();
    }

}