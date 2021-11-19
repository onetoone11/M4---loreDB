<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;
use App\Models\genre;
use App\Models\tags;
use App\Models\Story;
use App\Models\topic;
use App\Models\uni_genre;
use App\Models\uni_tags;
use App\Models\story_tags;
use App\Models\story_topic;
use App\Models\story_type;
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
        $uni = Universe::all();
        return view('pages.createuni')->with('genres', $genres)->with('tags', $tags)->with('uni', $uni);
    }

    public function about() {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'return';
        $this->validate($request, [
            'titleinput' => 'required',
            // 'genreselect' => 'required',
            // 'tagselect' => 'required'
        ]);

        // Create Post
        $uni = new Universe;
        $uni->name = $request->input('titleinput');
        $uni->save();

        // $genres = new uni_genre;
        // $genres->uni_id = $uni->id;
        // $genres->genre_id =$data['genreselect'];
        // $genres->save();

        // $tags = new uni_tags;
        // $tags->uni_id = $uni->id;
        // $tags->tag_id =$data['tagselect'];
        // $tags->save();

        return redirect('/pages');
    }
}
