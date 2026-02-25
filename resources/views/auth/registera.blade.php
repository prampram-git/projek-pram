@extends('layouts.authr')

@section('title', 'Register')

@section('content')

<div class="register-section">
    <div class="register-banner">
        <img src="{{ asset('images/banner.png') }}" alt="Banner">
        
        <div class="register-card">
            <h2>Register Akun Petugas</h2>

             @if ($errors->any())
                <div style="margin-bottom: 12px; color: #a30d11; font-size: 14px;">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('registera') }}">
            @csrf

            <input type="text" name="no_telepon" placeholder="No Telepon" value="{{ old('no_telepon') }}" required>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <input type="text" name="nama_pengguna" placeholder="Nama Pengguna" value="{{ old('nama_pengguna') }}" required>
            <input type="password" name="password" placeholder="Kata Sandi" required>

            <div class="form-bottom">
                <button type="submit">Register</button>
            </div>
        </form>
        </div>
    </div>
</div>



@endsection