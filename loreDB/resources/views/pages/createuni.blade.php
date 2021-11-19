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


                <label>
                    Genre<br>
                    <select name='genreselect' id='genreselect'>
                        <option value="" disabled selected hidden>Choose...</option>
                        @foreach ($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->name}}</option>
                        @endforeach
                    </select>
                </label>

                {{-- <label>
                        @foreach($genres as $genre)
                            <input type="checkbox" name="genreselect[]" value="{{$genre->id}}"><p>{{$genre->name}}</p>
                        @endforeach
                </label> --}}

                <label>
                    Tags<br>
                    <select id='tagselect' name="tagselect">
                        <option value="" disabled selected hidden>Choose...</option>
                        @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                    </select>
                </label>

                {{-- <label>
                    Icon<br>
                    <input type="file" id="iconinput">
                </label> --}}

                <input id="submitUniverse" type="submit" value="Create">
            </form>
        </div>
    </div>

@endsection