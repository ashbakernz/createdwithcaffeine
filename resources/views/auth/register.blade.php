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
                                                Register
                                            </h1>
                                            <form id="register-form" role="form" method="POST" action="{{ url('/register') }}">
                                            {{ csrf_field() }}
                                                <!-- NAME -->
                                                <p class="control">
                                                    <input name="name" id="name" value="{{ old('name') }}" required autofocus class="input{{ $errors->has('name') ? ' is-danger' : '' }}" type="text" placeholder="Name">

                                                    @if ($errors->has('name'))
                                                        <span class="help is-danger">
                                                            {{ $errors->first('name') }}
                                                        </span>
                                                    @endif
                                                </p>
                                                <!-- EMAIL -->
                                                <p class="control">
                                                    <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" required placeholder="Email" value="{{ old('email') }}">
                                                    @if ($errors->has('email'))
                                                        <span class="help is-danger">
                                                            {{ $errors->first('email') }}
                                                        </span>
                                                    @endif
                                                </p>
                                                <!-- PASSWORD -->
                                                <p class="control">
                                                    <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" required placeholder="Password">
                                                    @if ($errors->has('password'))
                                                        <span class="help is-danger">
                                                            {{ $errors->first('password') }}
                                                        </span>
                                                    @endif
                                                </p>
                                                <!-- CONFIRM PASSWORD -->
                                                <p class="control">
                                                    <input id="password_confirmation" type="password" class="input{{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" name="password_confirmation" required placeholder="password_confirmation">
                                                    @if ($errors->has('password_confirmation'))
                                                        <span class="help is-danger">
                                                            {{ $errors->first('password_confirmation') }}
                                                        </span>
                                                    @endif
                                                </p>


                                                <p class="hero-buttons">
                                                    <button type="submit" name="btn-login" id="btn-login" class="button">
                                                        <span class="icon">
                                                            <i class="ion-log-in"></i>
                                                        </span>
                                                        <span>Register</span>
                                                    </button>
                                                    <a class="button" href="{{ url('/login') }}">
                                                        <span class="icon">
                                                            <i class="fa fa-question"></i>
                                                        </span>
                                                        <span>Already registered?</span>
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
