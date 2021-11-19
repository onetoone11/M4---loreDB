@extends('layouts.app')

@section('content')

    <div id="maincuni">
        <div id="content">
            <form id="createUniverseForm" action="" method="POST", enctype="multipart/form-data">
                <p id="createTitle">{{$title}}</p>
                <label>
                    Title<br>
                    <input type='text' id='titleinput' name='titleinput' placeholder="Title...">
                </label>


                <label>
                    Genre<br>
                    <select name='genreselect' id='genreselect'>
                        <option value="" disabled selected hidden>Choose...</option>
                        <option value="horror">Horror</option>
                        <option value="magical_realism">Magical Realism</option>
                    </select>
                </label>

                <label>
                    Tags<br>
                    <select id='tagselect'>
                        <option value="" disabled selected hidden>Choose...</option>
                        <option value="">Sci-fi</option>
                    </select>
                </label>

                <label>
                    Icon<br>
                    <input type="file" id="iconinput">
                </label>

                <input id="submitUniverse" type="submit" value="Create">
                <script type="text/javascript">
                    CKEDITOR.replace( 'texteditor' );
                </script>
            </form>
        </div>
    </div>

@endsection