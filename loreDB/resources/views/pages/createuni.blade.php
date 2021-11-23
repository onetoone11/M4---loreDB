@extends('layouts.app')

@section('content')

    <div id="maincuni">
        <div id="content">
            <form id="createUniverseForm" action="./pages" method="POST", enctype="multipart/form-data">
                @csrf <!-- {{ csrf_field() }} -->
                <p id="createTitle">Create New Universe</p>
                <label>
                    Title<br>
                    <input type='text' id='titleinput' name='titleinput' placeholder="Title...">
                </label>

                {{-- <input type="checkbox"> --}}


                {{-- <label>
                    Genre<br>
                    <select multiple name='genreselect' id='genreselect'>
                        <option value="" disabled selected hidden>Choose...</option>
                        @foreach ($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->name}}<input type="checkbox" id="genre{{$genre->id}}"></option>
                        @endforeach
                    </select>
                </label> --}}

                <div>
                    Genre<br>
                    @foreach($genres as $genre)
                        <input id="genre{{$genre->name}}" name="genrebox[]" type="checkbox" value="{{$genre->id}}">
                        <label for="genre{{$genre->name}}">{{$genre->name}}</label>
                        <br>
                    @endforeach
                </div>

                {{-- <label>
                    Tags<br>
                    <select id='tagselect' name="tagselect">
                        <option value="" disabled selected hidden>Choose...</option>
                        @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                    </select>
                </label> --}}

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