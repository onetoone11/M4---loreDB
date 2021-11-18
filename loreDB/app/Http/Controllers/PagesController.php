<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;
use DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $uni = Universe::all();
        return view('pages.index')->with('uni', $uni);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createuni(){
        $genres = DB::table('genres')->get();
        $tags = DB::table('tags')->get();
        return view('pages.createuni')->with('genres', $genres)->with('tags', $tags);
    }

    public function about() {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }
}
