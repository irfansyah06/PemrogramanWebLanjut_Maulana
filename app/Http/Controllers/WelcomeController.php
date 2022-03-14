<?php

namespace App\Http\Controllers;
use App\Models\Product;

class WelcomeController extends Controller
{
    // public function index() {
    //     return view('pages.index');
    // }

    public function index()
    {
        $data = [
            'latest'    => Product::latestProducts(),
            'featured'  => Product::featuredProducts()
        ];

        return view('pages.index', $data);
    }
}
