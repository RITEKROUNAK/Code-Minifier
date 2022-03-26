@extends('layouts.app')
@section('title', 'CSS Minify')

@section('content')

    <div class="content-minify">
        <div class="container">
            <h2 class="text-center">Minify CSS</h2>
            <p class="text-center">If there is one thing you can do to your website, it's turning on CSS compression. For average pages, like 100k of CSS, it can turn into 20k. It downloads faster and the perception of speed by the user from "click to render" will increase.
            </p>

            <div class="row">
                <!--un-minified css code-->
                <div class="col-sm-6">
                    <form action="{{url('css-minify')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Input CSS</h3>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('content'))
                                    <textarea name="content_css" required>{{Session::get('content')}}</textarea>
                                    @else
                                    <textarea name="content_css" autofocus required placeholder="Paste css code here"></textarea>
                                @endif
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Minify</button>
                        </div>
                    </form>
                </div>

                <!--minified css code-->
                <div class="col-sm-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Minified Output</h3>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('minified'))
                                    <textarea class="minified_output" placeholder="minified code">{{Session::get('minified')}}</textarea>
                                @else
                                    <textarea placeholder="minified code"></textarea>
                                @endif

                            </div>
                        </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary select_text">Select All</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function () {
            $('.navbar-nav>li').removeClass('active');
            $('.navbar-nav>li.css').addClass('active');
        })
    </script>
@stop
