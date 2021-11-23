@extends('layouts.app')

@section('content')
<div id="main">

    <div id="main-content">
        <div class="section">

            <h1>Universes</h1>

            <hr>
            @if (count($universes) > 0)
            @foreach ($universes as $uni)
                <div class="section-item hover">
                    <h2>{{$uni->name}}</h2>
                    <div class="tags">
                        {{-- <h3>{{$uni->uni_genres->genres->name}}</h3> --}}
                    </div>
                    <div class="tags">
                        <h3>{{$uni->leftJoin('uni_tags','universes.id','=','uni_tags.uni_id')->leftJoin('tags','uni_tags.tag_id','=','tags.id')->select('tags.name')->limit(3)->get()}}</h3>
                    </div>
                    <div class="tags">
                        <p>created at: <br> {{$uni->created_at}}</>
                    </div>
                </div>
            @endforeach
            {{-- {{$universe->links("pagination::bootstrap-4")}} --}}
        @else
            <p>No universes found</p>
        @endif
            

        </div>

    </div>

</div>
@endsection