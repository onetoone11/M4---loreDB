@extends('layouts.app')

@section('content')
<div id="main">

    <div id="main-content">
        <div class="section">

            <h1>Universes</h1>

            <hr>
            @if (count($universes) > 0)
            @foreach ($universes as $uni)
            
            
                <div class="section-item">
                    <a class="hover favicon" href="../stories/{{$uni->id}}/story"><h2>{{$uni->name}}</h2></a>
                    <div class="tags">
                        
                        <h3>
                            @foreach($genres as $genre)
                                {{ $genre->name }}
                            @endforeach
                        </h3>
                        
                    </div>
                    <div class="tags">
                            <h3>
                                @foreach(
                                    $uni->select('*')->from('universes')
                                    ->join('uni_tags','universes.id','=','uni_tags.uni_id')
                                    ->join('tags', 'uni_tags.tag_id', '=', 'tags.id')
                                    ->limit(3)
                                    ->get() as $post)
                                    {{ $post->name }}
                                @endforeach
                            </h3>
                    </div>
                    <div class="tags">
                        <p>created at: <br> {{$uni->created_at}}</>
                    </div>
                    {{-- <div class="tags">
                        <a class="hover edituni" href="/pages/{{$uni->id}}/edituni">Edit</a>
                    </div> --}}
                        
                </div>
                
            @endforeach
        @else
            <p>No universes found</p>
        @endif
            

        </div>

    </div>

</div>
@endsection