<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Storage;
use App\Models\Universe;
use DB;

class UniversesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uni = Universe::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.index')->with('uni', $uni);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createuni');
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
            'genreselect' => 'required',
            'tagselect' => 'required',
            'themeselect' => 'required',
            'iconinput' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('iconinput')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('iconinput')->getClientOriginalName();
            // Get just filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('iconinput')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.''.time().'.'.$extension;
            // Upload Image
            $path = $request->file('iconinput')->storeAs('public/iconimages', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Post
        $uni = new Universe;
        $uni->name = $request->input('titleinput');
        $uni->cover_image = $fileNameToStore;
        $uni->save();

        $genres = new uni_genre;
        $genres->uni_id = $uni->id;
        $genres->genre_id =$data['genreselect'];
        $genres->save();

        $tags = new uni_tags;
        $tags->uni_id = $uni->id;
        $tags->tag_id =$data['tagselect'];
        $tags->save();

        return redirect('/posts')->with('success', 'Uni Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
