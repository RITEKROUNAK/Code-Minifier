@extends('layouts.app')
@section('title', 'Minify HTML')

@section('content')

    <div class="content-minify">
        <div class="container">
            <h2 class="text-center">Minify HTML</h2>
            <p class="text-center">HTML File compression takes the optimization one step further by allowing you to combine the contents of several HTML files into a single file (and minified file). This can be a huge performance benefit when using some SPA frameworks
            </p>

            <div class="row">
                <!--un-minified css code-->
                <div class="col-sm-6">
                    <form action="{{url('html-minify')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Input HTML</h3>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('content'))
                                    <textarea name="content_html" required>{{Session::get('content')}}</textarea>
                                @else
                                    <textarea name="content_html" autofocus required placeholder="Paste css code here"></textarea>
                                @endif
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-info">Minify</button>
                        </div>
                    </form>
                </div>

                <!--minified css code-->
                <div class="col-sm-6">
                    <div class="panel panel-info">
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
                        <button type="submit" class="btn btn-info select_text">Select All</button>
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
            $('.navbar-nav>li.html').addClass('active');
        })
    </script>
@stop

