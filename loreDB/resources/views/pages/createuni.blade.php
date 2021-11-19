@extends('layouts.app')

@section('content')

    <div id="maincuni">
        <div id="content">
            <form id="createUniverseForm" action="App\Http\Controllers\PagesController@store" method="POST", enctype="multipart/form-data">
                <p id="createTitle">Create New Universe</p>
                <label>
                    Title<br>
                    <input type='text' id='titleinput' name='titleinput' placeholder="Title...">
                </label>


                <label>
                    Genre<br>
                    <select name='genreselect' id='genreselect'>
                        <option value="" disabled selected hidden>Choose...</option>
                        @foreach ($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->name}}</option>
                        @endforeach
                    </select>
                </label>

                <label>
                    Tags<br>
                    <select id='tagselect'>
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
                <script type="text/javascript">
                    CKEDITOR.replace( 'texteditor' );
                </script>
            </form>
        </div>
    </div>

@endsection