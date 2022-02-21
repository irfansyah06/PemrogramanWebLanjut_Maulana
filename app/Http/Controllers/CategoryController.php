<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function edugames() {
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">marbel-edu-games</a>';
    }
    public function kidsgame() {
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">marbel-and-friends-kids-games</a>';
    }
    public function storybooks() {
        return '<a href="https://www.educastudio.com/category/riri-story-books">riri-story-books</a>';
    }
    public function kidsongs() {
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">kolak-kids-songs</a>';
    }
}
