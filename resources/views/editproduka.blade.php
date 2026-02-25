</div>@extends('layouts.appa')

@section('title', 'Laporan Produk Admin')

@section('content')
<div class="admin-container">

    <h2 class="page-title">Laporan Produk</h2>

    <div class="laporan-layout">

        <!-- LEFT: LIST PRODUK -->
        <div class="produk-list">

            <!-- CARD PRODUK 1 -->
            <div class="produk-card">
                <div class="produk-image">
                    <div class="img-dummy"></div>
                </div>

                <div class="produk-info">
                    <h3 class="produk-title">
                        Nama Produk Dummy 1
                    </h3>

                    <p class="produk-subtitle">
                        Varian / Keterangan Produk
                    </p>

                    <div class="divider-line"></div>

                    <div class="ringkasan">
                        <p class="label">Ringkasan Transaksi:</p>

                        <div class="row">
                            <span>Harga produk</span>
                            <span>Rp0</span>
                        </div>
                        <div class="row">
                            <span>Produk terjual</span>
                            <span>0</span>
                        </div>
                        <div class="row">
                            <span>Stok produk</span>
                            <span>0</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD PRODUK 2 -->
            <div class="produk-card">
                <div class="produk-image">
                    <div class="img-dummy"></div>
                </div>

                <div class="produk-info">
                    <h3 class="produk-title">
                        Nama Produk Dummy 2
                    </h3>

                    <p class="produk-subtitle">
                        Varian / Keterangan Produk
                    </p>

                    <div class="divider-line"></div>

                    <div class="ringkasan">
                        <p class="label">Ringkasan Transaksi:</p>

                        <div class="row">
                            <span>Harga produk</span>
                            <span>Rp0</span>
                        </div>
                        <div class="row">
                            <span>Produk terjual</span>
                            <span>0</span>
                        </div>
                        <div class="row">
                            <span>Stok produk</span>
                            <span>0</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- RIGHT: DETAIL PRODUK -->
        <div class="detail-card">
            <h3 class="detail-title">Detail Produk</h3>

            <div class="detail-box">
                <p class="detail-label">Jumlah Transaksi</p>
                <p class="detail-value">0</p>
            </div>

            <div class="detail-box">
                <p class="detail-label">Jumlah Pendapatan</p>
                <p class="detail-value">Rp0</p>
            </div>
        </div>

    </div>
</div>
@endsection<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mindys')</title>

    <link rel="stylesheet" href="{{ asset('css/heada.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body> 

    @include('partials.headera')

    <main>
        @yield('content')
    </main>

</body>
</html>