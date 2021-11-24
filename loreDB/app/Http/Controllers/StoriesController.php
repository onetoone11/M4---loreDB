<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Story;

class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::orderBy('created_at', 'desc')->paginate(20);
        return view('stories.index')->with('stories', $stories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = DB::table('story_topics')->get();
        $tags = DB::table('story_tags')->get();
        $types = DB::table('story_types')->get();
        // $universe_id = Universe::all();
        return view('stories.create')->with('topics', $topics)->with('tags', $tags)->with('type', $types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'text' => 'required',
            'name' => 'required'
        ]);

        $story = new Story;
        $story->text = $request->input('text');
        $story->name = $request->input('name');
        $story->universe_id = 30;
        $story->save();
        return redirect('/stories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //     $name = $request->input('name');
    //     $universe_id = 10;
    //     $text = $request->input('text');

    //     DB::table('stories')->insert(
    //         array(
    //             'name' => $name,
    //             'universe_id' => $universe_id,
    //             'text' => $text
    //         )
    //     );

        //INSERT INTO `stories`(`name`, `universe_id`, `text`) VALUES ('test', '50', 'blablabla');
        // return view('stories.show')->with('name',$name);

        $story = Story::find($id);
        return view('stories.show')->with('story', $story);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $story = Story::find($id);
        
        //Check if post exists before deleting
        if (!isset($story)){
            return redirect('/stories')->with('error', 'No Story Found');
        }

        return view('stories.edit')->with('story', $story);
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
        $story = Story::find($id);

        $story->name = $request->input('name');
        $story->text = $request->input('text');
        $story->save();

        return redirect('/stories')->with('success', 'story Updated');

        // return "hello";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
