<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Program;

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

    // public function index()
    // {
    //     return view('pages.programs.index');
    // }

    // public function karir()
    // {
    //     return view('pages.programs.karir');
    // }

    // public function magang()
    // {
    //     return view('pages.programs.magang');
    // }

    // public function kunjungan()
    // {
    //     return view('pages.programs.kunjungan');
    // }
    public function index()
    {
        $data = Program::getAll();
        return view('pages.programs.index', compact('data'));
    }

    public function show(string $slug)
    {
        $data = Program::getBySlug($slug);
        return view('pages.programs.show', compact('data'));
    }
}