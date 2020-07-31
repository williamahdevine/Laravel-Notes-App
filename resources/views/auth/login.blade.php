@extends('layouts.app')

@section('content')
<div class="login-wrapper">
    <div class="title m-b-md">
        Login
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="uname-field">
            <label for="email">E-Mail Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        <div class="pass-field">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="loginBTN-cont">
            <button type="submit" class="btn loginBTN">Login</button>
        </div>
        
    </form>
</div>

@endsection
