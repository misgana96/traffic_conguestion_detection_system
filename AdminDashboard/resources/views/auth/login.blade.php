@extends('layouts.header')
@section('container')
<div class="d-flex content-signin align-items-center">
<form class="text-center form-signin form-horizontal content" role="form" method="POST" action="{{ url('/login') }}">
    <img class="mb-4 img rounded-circle" src="/img/facebook.jpg" alt="" width="100" height="100">
      {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label sr-only">E-Mail Address</label>

                            <div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label sr-only">Password</label>

                            <div>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="btn btn-lg btn-primary btn-block">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                            <div>
                                <a href="/register">
                                    <button class="btn btn-lg btn-primary btn-block">Register</button>
                                </a>
                                
                            </div>
                        </div>
</form>
</div>
@endsection
