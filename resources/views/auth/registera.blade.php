@extends('layouts.auth')

@section('title', 'Register')

@section('content')

<div class="register-section">
    <div class="register-banner">
        <img src="{{ asset('images/banner.png') }}" alt="Banner">
        
        <div class="register-card">
            <h2>Register Akun Petugas</h2>

            <form method="POST" action="{{ route('register') }}">
            @csrf

            <input type="text" name="no_telepon" placeholder="No Telepon">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="nama_pengguna" placeholder="Nama Pengguna">
            <input type="password" name="password" placeholder="Kata Sandi">

            <div class="form-bottom">
                <button type="submit">Register</button>
            </div>
        </form>
        </div>
    </div>
</div>



@endsection