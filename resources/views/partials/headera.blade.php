<div class="header-gradient"></div>

<div class="header-wrapper">
    <div class="header">

        <div class="header-left">
            <div class="logo">Mindys</div>
            <span class="divider">|</span>

            <div class="admin-menu">
                <a href="{{ route('laporanproduka') }}" class="{{ request()->routeIs('laporanproduka') ? 'active' : '' }}">Laporan Produk</a>
                <a href="#">Edit Produk</a>
                <a href="#">Riwayat Transaksi</a>
                <a href="#">Backup / Restore</a>
                <a href="{{ route('registera.form') }}" class="{{ request()->routeIs('registera.form', 'registera.success') ? 'active' : '' }}">Registrasi Petugas</a>

                <div class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        Kelola Akun ▾
                    </a>
                    <div class="dropdown-menu">
                        <a href="#">Petugas</a>
                        <a href="#">Pengguna</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="profile-circle">
            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBmaWxsPSJjdXJyZW50Q29sb3IiIGQ9Ik0xMiA0YTQgNCAwIDAgMSA0IDRhNCA0IDAgMCAxLTQgNGE0IDQgMCAwIDEtNC00YTQgNCAwIDAgMSA0LTRtMCAxMGM0LjQyIDAgOCAxLjc5IDggNHYySDR2LTJjMC0yLjIxIDMuNTgtNCA4LTQiLz48L3N2Zz4=">
        </div>

    </div>
</div>