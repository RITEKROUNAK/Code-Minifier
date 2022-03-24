@extends('layouts.app')
@section('title', 'About')

@section('content')
    <div class="content-minify">
        <div class="container">
            <h2 class="text-center">About Page</h2>
            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <br><br>

            <div class="row">
                <div class="col-sm-6">
                    <div class="about-image">
                        <img src="{{asset('images/about2.jpg')}}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about-text">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <br>

            <div class="row">

                <div class="col-sm-6">
                    <div class="about-text">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="about-image">
                        <img src="{{asset('images/about1.jpg')}}" class="img-responsive" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
@section('script')
    <script>
        $(function () {
            $('.navbar-nav>li').removeClass('active');
            $('.navbar-nav>li.about').addClass('active');
        })
    </script>
@stop