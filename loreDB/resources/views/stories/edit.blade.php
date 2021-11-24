@extends('layouts.app')

@section('content')
<div id="maincuni">
<h1>Edit Post {{$story->id}}</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\StoriesController@update', $story->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::text('name', $story->name, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::textarea('text', $story->text, ['id' => 'texteditor', 'class' => 'form-control ckeditor', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection