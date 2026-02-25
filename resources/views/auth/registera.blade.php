@extends('layouts.authr')

@section('title', 'Register')

@section('content')

<div class="register-section">
    <div class="register-banner">
        <img src="{{ asset('images/banner.png') }}" alt="Banner">
        
        <div class="register-card">
            <h2>Register Akun Petugas</h2>

            <form method="POST" action="{{ route('registera') }}">
            @csrf

            <input type="text" name="no_telepon" placeholder="No Telepon" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="nama_pengguna" placeholder="Nama Pengguna" required>
            <input type="password" name="password" placeholder="Kata Sandi" required>

            <div class="form-bottom">
                <button type="submit">Register</button>
            </div>
        </form>
        </div>
    </div>
</div>



@endsection