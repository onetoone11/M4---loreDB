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
        $universes = Universe::all();
        $genres = DB::select('SELECT * FROM universes JOIN uni_genres ON universes.id = uni_genres.uni_id JOIN genres ON uni_genres.genre_id = genres.id LIMIT 3');
        return view('pages.index')->with('universes', $universes)->with('genres', $genres);  
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
        $this->validate($request, [
            'titleinput' => 'required',
            'genrebox' => 'required',
            'tagbox' => 'required'
        ]);

        // Create Post
        $uni = new Universe;
        $uni->name = $request->input('titleinput');
        $uni->save();

        $genreboxes = isset($_POST['genrebox']) ? $_POST['genrebox'] : array();
        foreach ($genreboxes as $box) {
            $genres = new uni_genre;
            $genres->uni_id = $uni->id;
            $genres->genre_id = $box;
            $genres->timestamps = false;
            $genres->save();
        }

        $tagboxes = isset($_POST['tagbox']) ? $_POST['tagbox'] : array();
        foreach ($tagboxes as $box) {
            if (isset($box)) {
                $tags = new uni_tags;
                $tags->uni_id = $uni->id;
                $tags->tag_id = $box;
                $tags->timestamps = false;
                $tags->save();
            }
        }

        return redirect('/pages');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $universes = Universes::find($id);

        if (!isset($universes)){
            return redirect('/pages');
        }

        return view('pages.edituni')->with('universes', $universes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $uni = Universes::find($id);
        $uni->name = $request->input('titleinput');
        $uni->save();

        $genreboxes = isset($_POST['genrebox']) ? $_POST['genrebox'] : array();
        foreach ($genreboxes as $box) {
            $genres = uni_genre::find($uni_id);
            $genres->genre_id = $box;
            $genres->timestamps = false;
            $genres->save();
        }

        return redirect('/pages');
    }
}
