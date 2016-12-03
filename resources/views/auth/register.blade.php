
@extends('layouts.adgencylayout')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1>Sign Up</h1>

                    <form role="form" method="post" action="{{url('/register')}}">

                        {{ csrf_field()}}

                        {{--Name--}}
                        <div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
                            <label class="control-label" for="name">Name</label>
                            <input id="name" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Name" type="text">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>


                        {{--Email--}}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                            <label class="control-label" for="email">Email address</label>
                            <input class="form-control" name="email" value="{{old('email')}}" id="email" placeholder="Enter email" type="email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        {{--Address--}}
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : ''}}">
                            <label class="control-label" for="address">Address</label>
                            <input class="form-control" value="{{old('address')}}" id="address" name="address" placeholder="Address" type="text">
                            @if ($errors->has('address'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('address')}}</strong>
                                    </span>
                            @endif
                        </div>

                        {{--Contact--}}
                        <div class="form-group{{ $errors->has('contact') ? ' has-error' : ''}}">
                            <label class="control-label" for="contact">Contact</label>
                            <input class="form-control" id="contact" name="contact" value="{{old('contact')}}" placeholder="Contact" type="text">
                            @if ($errors->has('contact'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('contact')}}</strong>
                                    </span>
                            @endif
                        </div>


                        {{--Role--}}
                        <label class="control-label" for="role" contenteditable="true">Role</label>
                        <div class="form-group{{ $errors->has('role') ? ' has-error' : ''}}">
                            {{--<div class="btn-group btn-group-md">--}}
                            {{--<a class="btn btn-info dropdown-toggle" data-toggle="dropdown"> Select Role <span class="fa fa-caret-down"></span></a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--<li>--}}
                            {{--<a href="#">Client</a>--}}
                            {{--<a href="#">Owner</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}

                            {{--<select class="form-control" id="role" name="role">--}}
                                {{--<option value="2" @if (old('role')=='2') selected="selected" @endif>Client</option>--}}
                                {{--<option value="3" @if (old('role')=='3') selected="selected" @endif>Owner</option>--}}
                            {{--</select>--}}
                            {{--@if ($errors->has('role'))--}}
                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('role') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}

                            {{--{!! Form::label('is_active', 'Status:') !!}--}}
                            {!! Form::select('role_id', array(2 => 'Client',3 => 'Owner'),null, ['class'=>'form-control']) !!}


                        </div>


                        {{--Password--}}
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
                            <label class="control-label" for="password">Password</label>
                            <input class="form-control" name="password" id="password" placeholder="Password" type="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        {{--Confirm Password--}}
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : ''}}">
                            <label class="control-label" for="password-confirm">Confirm Password</label>
                            <input class="form-control"  name="password_confirmation" id="password-confirm" placeholder="Confirm Password" type="password">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-default btn-lg">Register</button>

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
@stop

@section('footer')

@stop





