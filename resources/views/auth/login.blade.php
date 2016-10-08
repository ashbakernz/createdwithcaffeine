@extends('layouts.app')

@section('content')
<section class="hero is-medium has-text-centered">

    <div class="hero-body">
        <div class="container">
            <div class="block">
                <div class="columns">
                    <div class="column is-one-third"></div>
                    <div class="column">
                        <div class="tile is-ancestor">
                            <div class="tile is-12 is-vertical is-parent">

                                <div class="tile is-parent">
                                    <div class="tile is-child box">
                                        <div class="column">
                                            <h1 class="title">
                                                Login
                                            </h1>
                                            <form id="login-form" role="form" method="POST" action="{{ url('/login') }}">
                                            {{ csrf_field() }}

                                                <p class="control has-icon">
                                                    <input name="email" value="{{ old('email') }}" required autofocus class="input" type="email" placeholder="Email">
                                                    <i class="fa fa-envelope"></i>
                                                    @if ($errors->has('email'))
                                                        <span class="help is-danger">
                                                            {{ $errors->first('email') }}
                                                        </span>
                                                    @endif
                                                </p>
                                                <p class="control has-icon">
                                                    <input id="password" type="password" class="input" name="password" required placeholder="Password">
                                                    <i class="fa fa-lock"></i>
                                                    @if ($errors->has('password'))
                                                        <span class="help is-danger">
                                                            {{ $errors->first('password') }}
                                                        </span>
                                                    @endif
                                                </p>
                                                <p class="control">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="remember"> Remember Me
                                                        </label>
                                                    </div>
                                                </p>
                                                <p class="hero-buttons">
                                                    <button type="submit" name="btn-login" id="btn-login" class="button">
                                                        <span class="icon">
                                                            <i class="ion-log-in"></i>
                                                        </span>
                                                        <span>Login</span>
                                                    </button>
                                                    <a class="button" href="{{ url('/password/reset') }}">
                                                        <span class="icon">
                                                            <i class="fa fa-question"></i>
                                                        </span>
                                                        <span>Forgot Password?</span>
                                                    </a>
                                                </p>
                                            </form>
                                            <div id="error">
                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column"></div>

                </div>

            </div>
        </div>
    </div>
</section>



@endsection
