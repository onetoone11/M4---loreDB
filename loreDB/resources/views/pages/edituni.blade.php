@extends('layouts.app')

@section('content')

    <div id="maincuni">
        <div id="content">
            <form id="createUniverseForm" action="./pages" method="POST", enctype="multipart/form-data">
                @csrf <!-- {{ csrf_field() }} -->
                <p id="createTitle">Update New Universe</p>
                <label>
                    Title<br>
                    <input type='text' id='titleinput' name='titleinput' placeholder="Title...">
                </label>

                <div>
                    Genre<br>
                    @foreach($genres as $genre)
                        <input id="genre{{$genre->name}}" name="genrebox[]" type="checkbox" value="{{$genre->id}}">
                        <label for="genre{{$genre->name}}">{{$genre->name}}</label>
                        <br>
                    @endforeach
                </div>

                <div id="tagBoxes">
                    Tags<br>
                    @foreach($tags as $tag)
                        <input id="tag{{$tag->id}}" name="tagbox[]" type="checkbox" value="{{$tag->id}}">
                        <label for="tag{{$tag->id}}">{{$tag->name}}</label>
                        <br>
                    @endforeach
                </div>

                <input id="submitUniverse" type="submit" value="Create">
            </form>
        </div>
    </div>

@endsection