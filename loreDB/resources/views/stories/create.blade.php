@extends('layouts.app')

@section('content')
<div id="maincuni">
    <div class="storyPage">
        {{-- <form id="createUniverseForm" action="./pages" method="POST", enctype="multipart/form-data">
            @csrf <!-- {{ csrf_field() }} -->
            <p id="createTitle">Create New Universe</p>

            <div>
                type<br>
                @foreach($types as $type)
                    <input id="type{{$type->name}}" name="typebox[]" type="checkbox" value="{{$type->id}}">
                    <label for="type{{$type->name}}">{{$type->name}}</label>
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
        </form> --}}
        {{ Form::open(array('action' => 'App\Http\Controllers\StoriesController@store', 'method' => 'POST', 'class' => 'storyForm'))}}

        {{-- type<br>
        @foreach($types as $type)
            <input id="type{{$type->name}}" name="typebox[]" type="checkbox" value="{{$type->id}}">
            <label for="type{{$type->name}}">{{$type->name}}</label>
            <br>
            
        @endforeach --}}

        {{Form::text('name', '', ['class' => 'center', 'type' => 'text', 'placeholder' => 'Title', 'name' => 'name'])}}
        {{Form::textarea('text', '', ['class' => 'ckeditor', 'name' => 'texteditor', 'name' => 'text'])}}
        {{Form::submit('Post', ['class' => 'center', 'type' => 'submit', 'value' => 'post'])}}

        {{ Form::close() }}
    </div>
</div>
@endsection