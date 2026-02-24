@extends('layouts.auth')

@section('content')
<div class="card login-card">
    <h2>Login</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Kata Sandi" required>

        <button type="submit">Login</button>
    </form>

    <p class="switch">
        Belum punya akun?
        <a href="{{ route('register') }}">Register</a>
    </p>
</div>
@endsection