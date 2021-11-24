@extends('layouts.app')

@section('extraBtn')
{{-- <div><a href="#">Edit</a></div> --}}
@endsection

@section('content')
<div id="maincuni">
    <div id="content" style="background-color: #F9F2E4; border: none;">
        <h2 class="storyName">{{$story->name}}</h2 class="m2">
        <div class="storyText">{!! $story->text !!}</div>¨
        <hr style="width: 100%; margin-bottom: 30px">
        <div class="center">
            <small style="font-size: small">Created at {{$story->created_at}}</small>
            <small><a href="/stories/{{$story->id}}/edit">Edit</a></small>
        </div>
    </div>
</div>
@endsection