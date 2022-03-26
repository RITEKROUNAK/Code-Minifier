    @extends('layouts.app')
@section('title', 'Contact')

@section('content')
<div class="content-minify">
    <div class="container">
        <h2 class="text-center">Contact Page</h2>
        <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
        <br><br>

        @if(Session::has('message'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> {{Session::get('message')}}</a>.
            </div>
        @endif

        <div class="row">
            <div class="col-sm-8">
                <div class="contact-form">
                    <form action="{{url('contact')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" name="message" required></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-text">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                    <hr>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            Lorem Ipsum is simply dummy text
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            contact<span>@</span>gmail.com
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                           000-000-000
                        </li>
                    </ul>
                    <hr>
                    <ul class="list-unstyled social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>

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
        $('.navbar-nav>li.contact').addClass('active');
    })
</script>
@stop