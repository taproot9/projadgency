
@extends('layouts.adgencylayout')

@section('content')

@stop

@section('footer')
@stop

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Login&nbsp;</h1>

                <form method="post" action="{{url('/login')}}" role="form">

                    {{ csrf_field() }}

                    <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">

                        <label class="control-label" for="email">Email address</label>
                        <input class="form-control" name="email" id="email" placeholder="Enter email" type="email" value="{{old('email')}}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    </div>


                    <div class="form-group{{$errors->has('password') ? 'has-error' : ''}}">
                        <label class="control-label" for="password">Password</label>
                        <input class="form-control" name="password" id="password" placeholder="Password" type="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>


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


