<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Models\About;

class AboutController extends Controller
{
    // public function about() {
    //     return "Nama: Maulana Bintang Irfansyah <br> NIM: 2041720132";
    // }
    
    public function about()
    {
        // return view('pages.about');
        $data = About::firstOrFail();
        return view('pages.about', compact('data'));
    }
    
}


