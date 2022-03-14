<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    // public function index() {
    //     return '<a href="https://www.educastudio.com/news" target="_blank">https://www.educastudio.com/news</a>';
    // }
    // public function show($news) {
    //     return '<a href="https://www.educastudio.com/news/' . $news . '" target="_blank">https://www.educastudio.com/news/' . $news . '</a>';
    // }

    public function index()
    {
        $data = News::getAll();
        return view('pages.news.index', compact('data'));
    }

    // public function show($slug = "")
    // {
    //     if ($slug) {
    //         $title = str_replace("-", " ", $slug);
    //         return view('pages.detail', compact('title'));
    //     }
    //     return view('pages.news.news');
    // }
    public function show(string $slug = "")
    {
        if ($slug) {
            $data = News::getBySlug($slug);
            return view('pages.news.show', compact('data'));
        }
        return $this->index();
    }
}
