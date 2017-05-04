@extends('layouts.app')

@section('heroImg',"Grote_Markt_Antwerpen.jpg")
@section('heroAlt',"GroteMarkt van Antwerpen")

@section('content')
    @foreach($article as $info)
        <article>
            <a href="{{ url($info->url) }}" target="_blank">
                <img src="/img/{{ $info->image_url }}" alt="{{ $info->title }}">
                <h5>{{ $info->title }}</h5>
                <time>{{ $info->time_ago }} geleden</time>
                <p>{{ $info->content }}</p>
            </a>
        </article>
    @endforeach
@endsection
