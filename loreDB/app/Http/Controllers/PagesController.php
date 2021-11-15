<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Worlds';
        return view('pages.index')->with('title', $title);
    }

    public function createuni(){
        $title = 'Create New World';
        return view('pages.createuni')->with('title', $title);
    }

    public function about() {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }
}
