<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><img height="40" alt="Brand" src="{{asset('pic/Picture2.png')}}" class="center-block"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="{{url('/home')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('/adspace')}}">Ad Spaces</a>
                </li>
                <li>
                    <a href="{{url('/aboutus')}}">About Us</a>
                </li>

                <li>
                    <a href="{{url('/usermanagement')}}">User Management</a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

                        @if(Auth::user()->role_id == 1)
                            <li><a href="{{ url('/admin') }}"><i class="fa fa-btn fa-sign-out"></i>User Management</a></li>
                        @endif

                        @if(Auth::user()->role_id == 2)
                            <li><a href="{{ url('/client') }}"><i class="fa fa-btn fa-sign-out"></i>User Management</a></li>
                        @endif

                        @if(Auth::user()->role_id == 3)
                            <li><a href="{{ url('/owner') }}"><i class="fa fa-btn fa-sign-out"></i>User Management</a></li>
                        @endif
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<div class="carousel slide" id="carousel-example" data-interval="5000" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item">
            <img src="{{asset('pic/images-6.jpg')}}" alt="">
            <div class="carousel-caption">
                <h2>AdGency</h2>
                <p>Adgency bla blah blah</p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('pic/images-11.jpg')}}" alt="">
            <div class="carousel-caption">
                <h2>Title</h2>
                <p>Description</p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('pic/images-13.jpg')}}" alt="">
            <div class="carousel-caption">
                <h2>Title</h2>
                <p>Description</p>
            </div>
        </div>
        <div class="item active">
            <img src="{{asset('pic/images-14.jpg')}}" alt="">
            <div class="carousel-caption">
                <h2>Title</h2>
                <p>Description</p>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
    <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="https://unsplash.imgix.net/photo-1422728221357-57980993ea99?w=1024&amp;q=50&amp;fm=jpg&amp;s=b4a34018d745e33048bcfc326cb9907b" class="img-responsive">
                <h2>Title 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                    <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                    <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
            <div class="col-md-3">
                <img src="https://unsplash.imgix.net/photo-1422728221357-57980993ea99?w=1024&amp;q=50&amp;fm=jpg&amp;s=b4a34018d745e33048bcfc326cb9907b" class="img-responsive">
                <h2>Title 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                    <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                    <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
            <div class="col-md-3">
                <img src="https://unsplash.imgix.net/photo-1422728221357-57980993ea99?w=1024&amp;q=50&amp;fm=jpg&amp;s=b4a34018d745e33048bcfc326cb9907b" class="img-responsive img-rounded">
                <h2>Title 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                    <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                    <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
            <div class="col-md-3">
                <img src="https://unsplash.imgix.net/photo-1422728221357-57980993ea99?w=1024&amp;q=50&amp;fm=jpg&amp;s=b4a34018d745e33048bcfc326cb9907b" class="img-responsive">
                <h2>Title 4</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                    <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                    <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <h1>Heading</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                    <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                    <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
            <div class="col-md-6 text-center">
                <h1>Heading</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                    <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                    <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-3 text-center">
                <a><i class="fa fa-5x fa-fw fa-instagram"></i></a>
            </div>
            <div class="col-xs-3">
                <a href="https://twitter.com/?lang=en"><i class="fa fa-5x fa-fw fa-twitter"></i></a>
            </div>
            <div class="col-xs-3">
                <a><i class="fa fa-5x fa-fw fa-facebook"></i></a>
            </div>
            <div class="col-xs-3 text-center">
                <a><i class="fa fa-5x fa-fw fa-github"></i></a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>