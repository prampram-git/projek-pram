@extends('layouts.appa')
 
@section('title', 'Edit Produk Admin')
 
 @section('content')
 <div class="admin-container">
    <h2 class="page-title">Edit Produk</h2>
 
    <div class="laporan-layout edit-layout">
         <div class="produk-list">
             <div class="produk-card edit-card">
                 <div class="produk-image product-thumb thumb-grey"></div>

                 <div class="produk-info edit-info">
                     <h3 class="produk-title">Infinix Note 50 8/256GB - Up to 16GB Extended RAM - Helio G100 - 6.78” FHD+ Amoled - 50MP OIS - 5200 mAh - NFC - Titanium Grey</h3>
                     <p class="produk-subtitle">Titanium Grey 8/256GB</p>
                     <p class="stok-text">Stok 8</p>

                     <div class="edit-actions-row">
                         <div class="edit-buttons">
                             <button type="button" class="btn-edit">Ubah</button>
                             <button type="button" class="btn-delete">Hapus</button>
                         </div>
                         <p class="edit-price">Rp2.899.000</p>
                     </div>
                 </div>
             </div>
 
             <div class="produk-card edit-card">
                 <div class="produk-image product-thumb thumb-black"></div>
 
                 <div class="produk-info edit-info">
                     <h3 class="produk-title">Infinix Note 50 8/256GB - Up to 16GB Extended RAM - Helio G100 - 6.78” FHD+ Amoled - 50MP OIS - 5200 mAh - NFC - Shadow Black</h3>
                     <p class="produk-subtitle">Shadow Black 8/256GB</p>
                     <p class="stok-text">Stok 8</p>
 
                     <div class="edit-actions-row">
                         <div class="edit-buttons">
                             <button type="button" class="btn-edit">Ubah</button>
                             <button type="button" class="btn-delete">Hapus</button>
                         </div>
                         <p class="edit-price">Rp2.899.000</p>
                     </div>
                 </div>
             </div>
 
             <div class="produk-card edit-card">
                 <div class="produk-image product-thumb thumb-green"></div>
 
                 <div class="produk-info edit-info">
                     <h3 class="produk-title">Infinix Note 50 8/256GB - Up to 16GB Extended RAM - Helio G100 - 6.78” FHD+ Amoled - 50MP OIS - 5200 mAh - NFC - Mountain Shade</h3>
                     <p class="produk-subtitle">Mountain Shade 8/256GB</p>
                     <p class="stok-text">Stok 8</p>
 
                     <div class="edit-actions-row">
                         <div class="edit-buttons">
                             <button type="button" class="btn-edit">Ubah</button>
                             <button type="button" class="btn-delete">Hapus</button>
                         </div>
                         <p class="edit-price">Rp2.899.000</p>
                     </div>
                 </div>
             </div>
 
             <div class="produk-card edit-card">
                 <div class="produk-image product-thumb thumb-red"></div>
 
                 <div class="produk-info edit-info">
                     <h3 class="produk-title">Infinix Note 50 8/256GB - Up to 16GB Extended RAM - Helio G100 - 6.78” FHD+ Amoled - 50MP OIS - 5200 mAh - NFC - Ruby Red</h3>
                     <p class="produk-subtitle">Ruby Red 8/256GB</p>
                     <p class="stok-text">Stok 8</p>
 
                     <div class="edit-actions-row">
                         <div class="edit-buttons">
                             <button type="button" class="btn-edit">Ubah</button>
                             <button type="button" class="btn-delete">Hapus</button>
                         </div>
                         <p class="edit-price">Rp2.899.000</p>
                     </div>
                 </div>
             </div>
         </div>
 
         <aside class="detail-card edit-detail-card">
             <h3 class="detail-title detail-title-red">Detail Produk</h3>
 
             <div class="detail-box edit-detail-box">
                 <p class="edit-detail-label">Jumlah Produk</p>
                 <p class="edit-detail-value">4</p>
             </div>
 
             <button type="button" class="btn-add-produk">Tambah Produk +</button>
         </aside>
     </div>
 </div>
@endsection