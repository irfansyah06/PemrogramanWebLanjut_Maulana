<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Hai! Selamat Datang";
    }
    public function about() {
        return "Nama: Maulana Bintang Irfansyah <br> NIM: 2041720132";

    }
    public function articles($id) {
        return "Ini adalah halaman artikel dengan ID: ".$id;
    }
}
