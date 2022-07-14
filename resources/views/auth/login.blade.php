@extends('shared/layout')
@section('body')
<!-- Row -->
<div class="row">
    <!-- Col -->
    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 mx-auto">
        <!-- Card -->
        <div class="px-4 py-3 py-lg-4 card rounded">
            <form class="form-horizontal form-login" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="text-center pt-4 pb-4">
                    <h1 class="h4 fw-600">
                        Login
                    </h1>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="inner-addon left-addon">
                        <i class="glyphicon glyphicon-user"></i>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" />
                    </div>
                    @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="control-label"></label>
                    <div class="inner-addon left-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    @if ($errors->has('password'))
                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember Me</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a class="link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                </div>
            </form>
        </div>
        <!-- !Card -->
    </div>
    <!-- !Col -->
</div>
<!-- !Row -->
@endsection
