@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="home">
        <div class="container text-center">
            <h2>Compress your <span class="element"></span></h2>
            <p>Minification is a fast and easy way to reduce a web application’s resource usage. Even with standard compression techniques, minification can improve the time needed to render a page by over 60%. Minifying your website can lead to large performance gains without compromising your users’ experience.</p>
            <div class="action-buttons">
                <a href="{{url('css-minify')}}" class="btn btn-primary">Minify CSS</a>
                <a href="{{url('js-minify')}}" class="btn btn-success">Minify JS</a>
                <a href="{{url('html-minify')}}" class="btn btn-info">Minify HTML</a>
            </div>
        </div>
    </div>
@endsection
