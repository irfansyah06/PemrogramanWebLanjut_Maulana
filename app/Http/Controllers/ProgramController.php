<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProgramController extends Controller
{
    // public function karir() {
    //     return '<a href="https://www.educastudio.com/program/karir">Karir</a>';
    // }
    // public function magang() {
    //     return '<a href="https://www.educastudio.com/program/magang">Magang</a>';
    // }
    // public function kunjunganIndustri() {
    //     return '<a href="https://www.educastudio.com/program/kunjungan-industri">Kunjungan Industri</a>';

    // }

    public function index()
    {
        return view('pages.programs.index');
    }

    public function karir()
    {
        return view('pages.programs.karir');
    }

    public function magang()
    {
        return view('pages.programs.magang');
    }

    public function kunjungan()
    {
        return view('pages.programs.kunjungan');
    }
    
}