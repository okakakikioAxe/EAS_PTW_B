@extends('layouts.admin')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">
@endsection

@section('title','admin | fesien')

@section('konten')

<div class="container text-center">
    <h3>Selamat datang, {{ session()->get('nama') }}</h3>
</div>
<br>
<br>
<br>
<br>
<br>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col"></div>
            <div class="col-lg-7">
                <a class="btn btn-outline-warning border border-4 border-warning w-100 h-100 barang" href="{{ route('admin.produk') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('gambar/Admin/baju.png') }}" class="rounded float-start gambar-baju" alt="...">
                            </div>
                            <div class="col-8">
                                <h1 class=" text-center position-relative top-50 start-50 translate-middle label-baju">Daftar Produk</h1>
                            </div>
                        </div>
                    </div>  
                </a>
            </div>
            <div class="col"></div>
        </div>
        <br>
        <div class="row">
            <div class="col"></div>
            <div class=" col-lg-7">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-outline-warning border border-4 border-warning w-100 laporan" href="#">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ asset('gambar/Admin/laporan.png') }}" class="rounded float-start gambar-laporan" alt="...">
                                    </div>
                                    <div class="col-8">
                                        <h4 class=" text-center position-relative top-50 start-50 translate-middle label-baju">Laporan</h4>
                                    </div>
                                </div>
                            </div>  
                        </a>
                    </div>
                    <div class="col position-relative">
                    <!-- <span class="position-absolute top-0 translate-middle text-center badge rounded-pill notif">+99</span>  -->
                        <a class="btn btn-outline-warning border border-4 border-warning w-100 transaksi" href="#">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ asset('gambar/Admin/transaksi.png') }}" class="rounded float-start gambar-transaksi" alt="...">
                                    </div>
                                    <div class="col-8">
                                        <h4 class=" text-center position-relative top-50 start-50 translate-middle label-baju">Transaksi</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
            
            <div class="col"></div>
        </div>
    </div>
@endsection
