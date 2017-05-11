@extends('layouts.app')

@section('title', $school->name)

@section('content')
    <style>
        .school + .school ul {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    list-style: none;
        }

        .school + .school a, .active span, .disabled span {
            background-color: #e5e5e6;
    width: 25%;
    text-align: center;
    padding: 15px;
    margin: 20px;
    cursor: pointer;
    display: inherit;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: inherit;
    -ms-flex-pack: inherit;
    justify-content: inherit;
    overflow: auto;
    color: black;
    text-decoration: none;
        }
        .school + .school a:hover {
            background-image: url('/img/hover_gray.png');
            background-size: cover;
        }
        .active span, .disabled span {
            cursor: default;
        }
    </style>
	<ul>
        @foreach($courses as $course)
            <a href="{{ $course->course_url }}">
                <li>{{ $course->name }}</li>
            </a>
        @endforeach
	</ul>
    {{ $courses->links() }}
@endsection
