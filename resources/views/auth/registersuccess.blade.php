@extends('layouts.auth')

@section('content')

<div class="register-section">
    <div class="register-banner">
        <img src="{{ asset('images/banner.png') }}" alt="Banner">

        <div class="register-card success-card">
            
            <div class="success-icon">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjEwMjQiIHZpZXdCb3g9IjAgMCAxMDI0IDEwMjQiPjxwYXRoIGZpbGw9IndoaXRlIiBkPSJNNTEyIDY0YTQ0OCA0NDggMCAxIDEgMCA4OTZhNDQ4IDQ0OCAwIDAgMSAwLTg5Nm0tNTUuOCA1MzYuNGwtOTkuNS05OS42YTM4LjQgMzguNCAwIDEgMC01NC40IDU0LjNMODI5LjEgNjgyYTQ4LjMgNDguMyAwIDAgMCA1NC4zIDBsMjYyLjQtMjYyLjVhMzguNCAzOC40IDAgMSAwLTU0LjMtNTQuM3oiLz48L3N2Zz4=">
            </div>

            <h2>Registrasi akun berhasil!</h2>

            <a href="{{ route('login') }}" class="success-btn">
                Login
            </a>

        </div>
    </div>
</div>

@endsection