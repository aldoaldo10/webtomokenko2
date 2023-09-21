@extends('layouts.master') <!-- Gantilah dengan nama layout yang sesuai dengan proyek Anda -->

@section('content')
<div class="container">
    <h1 class="my-4">Produk Kami</h1>
    <!-- Tambahkan konten produk di sini -->
    <div class="row">
        <div class="col-md-2">
            <div class="card">
                <img src="{{ asset('images/d31.jpg') }}" alt="Product 1" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tomo Kenko Vitamin D3 1000 IU</h5>
                    <p class="card-text">Rp23.900</p>
                    <a href="#" class="btn btn-primary">Detail Produk</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="{{ asset('images/e1.jpg') }}" alt="Product 2" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tomo Kenko Vitamin E | Vitamin E 400 UI</h5>
                    <p class="card-text">Rp28.900</p>
                    <a href="#" class="btn btn-primary">Detail Produk</a>
                </div>
            </div>
        </div> 
</div>
@endsection
