@extends('layouts.master')
@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{route('auth.login')}}" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" required="true" autofocus />
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" required="true" />
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me" />Remember Me
                                </label>
                            </div>
                            <div class="form-group">
                                <a href="{{route('auth.register')}}">Register?</a>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop