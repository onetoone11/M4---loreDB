@extends('layouts.app')

@section('content')
<div id="maincuni">
    <div class="storyPage">
        {{ Form::open(array('action' => 'App\Http\Controllers\StoriesController@store', 'method' => 'POST', 'class' => 'storyForm'))}}

        {{Form::text('name', '', ['class' => 'center', 'type' => 'text', 'placeholder' => 'Title', 'name' => 'name'])}}
        {{Form::textarea('text', '', ['class' => 'ckeditor', 'name' => 'texteditor', 'name' => 'text'])}}
        {{Form::submit('Post', ['class' => 'center', 'type' => 'submit', 'value' => 'post'])}}

        {{ Form::close() }}
    </div>
</div>
@endsection