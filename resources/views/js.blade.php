@extends('layouts.app')
@section('title', 'Minify Javascript')

@section('content')

    <div class="content-minify">
        <div class="container">
            <h2 class="text-center">Minify Javascript</h2>
            <p class="text-center">The sole benefit of minified JavaScript code is allowing a client to download fewer bytes, enabling the page to load faster, use less battery, use less of a mobile data plan, etc. This is usually be done as a build step when releasing code to a web server.
            </p>
            <div class="row">
                <!--un-minified css code-->
                <div class="col-sm-6">
                    <form action="{{url('js-minify')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Input JS</h3>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('content'))
                                    <textarea name="content_js" required>{{Session::get('content')}}</textarea>
                                @else
                                    <textarea name="content_js" autofocus required placeholder="Paste JS code here"></textarea>
                                @endif
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Minify</button>
                        </div>
                    </form>
                </div>

                <!--minified css code-->
                <div class="col-sm-6">
                    <div class="panel panel-success">
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
<button type="submit" class="btn btn-success select_text">Select All</button>
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
$('.navbar-nav>li.js').addClass('active');
})
</script>
@stop

