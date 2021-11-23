@extends('layouts.app')

@section('content')
<div id="main">

    <div id="main-content">
        <div class="section">

            <h1>Stories</h1>

            <hr>
            <form class="storySearch">
                <input type="search">
            </form>
            @if (count($stories) > 0)
            @foreach ($stories as $story)
                <div class="section-item hover">
                    <a href="/stories/{{$story->id}}">{{$story->name}}</a>
                    {{-- <div class="tags">
                        <h3>{{$universe->leftJoin('uni_genres','universes.id','=','uni_genres.uni_id')->leftJoin('genres','uni_genres.genre_id','=','genres.id')->select('genres.name')->limit(3)->get()}}</h3>
                    </div> --}}
                    {{-- <div class="tags">
                        <h3>{{$universe->leftJoin('uni_tags','universes.id','=','uni_tags.uni_id')->leftJoin('tags','uni_tags.tag_id','=','tags.id')->select('tags.name')->limit(3)->get()}}</h3>
                    </div> --}}
                    <div class="tags">
                        <p>created at: <br> {{$story->created_at}}</>
                    </div>
                </div>
            @endforeach
            {{-- {{$universe->links("pagination::bootstrap-4")}} --}}
        @else
            <p>No stories found</p>
        @endif
            

        </div>

    </div>

</div>
@endsection