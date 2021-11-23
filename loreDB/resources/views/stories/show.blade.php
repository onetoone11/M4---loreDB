@extends('layouts.app')

@section('content')
<div id="maincuni">
        <h2>{{$story->name}}</h2>
        {!! $story->text !!}
</div>
@endsection