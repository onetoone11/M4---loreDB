@extends('layouts.app')

@section('content')
<div id="main">

    <div id="main-content">
        <div class="section">

            <h1>Universes</h1>

            <hr>
            @if (count($uni) > 0)
            @foreach ($uni as $universe)
                <div class="section-item hover">
                    <h2>{{$universe->name}}</h2>
                    <div class="tags">
                        <h3>sci-fi, genre 2, genre 3...</h3>
                    </div>
                    <div class="tags">
                        <h3>sci-fi, tag 2, tag 3...</h3>
                    </div>
                    <div class="tags">
                        <p>created at: <br> {{$universe->created_at}}</>
                    </div>
                </div>
            @endforeach
            {{-- {{$universe->links("pagination::bootstrap-4")}} --}}
        @else
            <p>No posts found</p>
        @endif
            

        </div>

    </div>

</div>
@endsection