@extends('shared/layout')

@section('body')
    <div class="login-page">
        <div class="container page-top-margin" style="padding-top: 15px; padding-bottom: 100px;">
            <div class="container" style="height: 50px;"></div>
            <h1 class="text-center" style="font-size: 60px;">Sign in</h1>
            <div class="container" style="height: 50px;"></div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form class="form-login" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label{{ $errors->has('email') ? ' is-invalid' : '' }}">
                                <input class="mdl-textfield__input" type="email" name="email" id="email">
                                <label class="mdl-textfield__label" for="email">Email</label>

                                @if ($errors->has('email'))
                                    <span class="help-text">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="clearfix"></div>

                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label{{ $errors->has('password') ? ' is-invalid' : '' }}" style="display: block; margin: 0 auto; width: 400px;">
                                <input class="mdl-textfield__input" type="password" name="password" id="password">
                                <label class="mdl-textfield__label" for="email">Password</label>

                                @if ($errors->has('password'))
                                    <span class="mdl-textfield__error">{{ $errors->first('password') }}</span>
                                @endif
                            </div>


                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label class="control-label"></label>--}}
                            {{--<div class="inner-addon left-addon">--}}
                            {{--<i class="glyphicon glyphicon-user"></i>--}}
                            {{--<input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" />--}}
                            {{--</div>--}}

                            {{--@if ($errors->has('email'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('email') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label class="control-label"></label>--}}
                            {{--<div class="inner-addon left-addon">--}}
                            {{--<i class="glyphicon glyphicon-lock"></i>--}}
                            {{--<input id="password" type="password" class="form-control" name="password" placeholder="Password">--}}
                            {{--</div>--}}

                            {{--@if ($errors->has('password'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--<div class="checkbox">--}}
                            {{--<label>--}}
                            {{--<input type="checkbox" name="remember"> Remember Me--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="clearfix"></div>

                            <div class="mdl-checkbox-center">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                                    <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input" name="remember">
                                    <span class="mdl-checkbox__label">Remember Me</span>
                                </label>
                            </div>

                            <div class="clearfix"></div>
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored text-center">
                                Sign In
                            </button>

                            <div class="clearfix"></div>
                            <a class="btn btn-link text-center" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div>
                        {{--<div class="container-fluid">--}}
                        {{--<div class="form-group">--}}
                        {{--<button type="submit" class="btn btn-primary">--}}
                        {{--<i class="fa fa-btn fa-sign-in"></i> Login--}}
                        {{--</button>--}}

                        {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection