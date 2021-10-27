
@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<section class="homepage">
    <section id="jumbotron">
        <img src="images/jumbotron.jpg" alt="Jumbotron">
    </section>
    <section id="CurrentSeries">
        <div class="container">
            <h2 id="title">Current Series</h2>
            <div class="series">
                @foreach ($comics as $item)
                <div class="item">
                    <div class="img">
                        <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                    </div>
                    <div class="titolo">{{$item['title']}}</div>
                </div>
                @endforeach
            </div>
            <div class="button">
                <button>Load More</button>
            </div>
        </div>
    </section>
   
</section>

@endsection