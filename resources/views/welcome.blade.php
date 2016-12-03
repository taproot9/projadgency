
@extends('layouts.adgencylayout')

@section('content')
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
@stop

@section('footer')

@stop







