@extends('layouts.default')

@section('content')
    <div class="container">
    <div class="login_register_container">
        <div class="container_heading">Login</div>
        <form class="login_register_form" method="post" action="{{ route('register') }}">
            @csrf
            <label for="name">Username<sup>*</sup></label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="validation_error">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

            <label for="email">Email<sup>*</sup></label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="validation_error">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
            @endif

            <label for="password">Password<sup>*</sup></label>
            <input id="password" type="password" name="password" required>

            @if ($errors->has('password'))
                <span class="validation_error">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @endif

            <label for="password-confirm">Confirm password<sup>*</sup></label>
            <input id="password-confirm" type="password" name="password_confirmation" required>

            <button type="submit">Register</button>
            <a href="{{ route('login') }}">
                Login
            </a>
            <a href="{{ route('main') }}">
                Back to Main page
            </a>

        </form>
    </div>
    </div>
@endsection
