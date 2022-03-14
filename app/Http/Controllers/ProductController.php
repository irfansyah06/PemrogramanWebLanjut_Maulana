<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::getAll();
        return view('pages.categories.index', compact('data'));
    }

    public function show(string $slug)
    {
        $data = Product::getBySlug($slug);
        return view('pages.categories.show', compact('data'));
    }

    // public function index()
    // {
    //     return view('pages.categories.index');
    // }

    // public function eduGames()
    // {
    //     return view('pages.categories.eduGames');
    // }

    // public function kidsGames()
    // {
    //     return view('pages.categories.kidsGames');
    // }

    // public function storyBooks()
    // {
    //     return view('pages.categories.storyBooks');
    // }

    // public function kidsSongs()
    // {
    //     return view('pages.categories.kidsSongs');
    // }
}
