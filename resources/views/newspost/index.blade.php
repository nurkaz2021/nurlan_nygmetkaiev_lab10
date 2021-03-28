@extends('layouts.app')

@section('content')
        <div id="articles">
        @foreach ($nps as $np)
                <article>
                    <img id="img" src="http://placeimg.com/300/300/car" alt="">
                    <h1><a href="{{route('np_show', [
    'id' => $np->id,
    'language' => \App::getLocale()
    ])}}">{{$np->title}}</a></h1>
                    <p>{{$np->teaser}}</p>
                </article>
        @endforeach
        </div>
@endsection