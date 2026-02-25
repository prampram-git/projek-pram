@extends('layouts.auth')

@section('title', 'Register')

@section('content')

<div class="register-section">
    <div class="register-banner">
        <img src="{{ asset('images/banner.png') }}" alt="Banner">
        
        <div class="register-card">
            <h2>Login</h2>

            <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Kata Sandi" required>

            <div class="form-bottom">
                <p class="login-link">
                    Belum punya akun?
                    <a href="{{ route('register.form') }}">Register</a>
                </p>

                <button type="submit">Login</button>
            </div>
        </form>

        </div>
    </div>
</div>



@endsection