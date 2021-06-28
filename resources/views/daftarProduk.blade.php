@extends('layouts.admin')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">
@endsection

@section('title','admin | fesien')

@section('konten')
<div class="container">
@if(session()->has('message'))
    <div class="container">
    <div class="alert {{ session()->get('message2') }} alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    </div>
@endif
<br>
    <h3 class="text-center">DAFTAR PRODUK</h3>
    <a class="btn btn-primary float-end" href="{{ route('admin.form_tambah_barang') }}" role="button">Tambah +</a>
</div>
<br>
<br>
<br>
<br>
<div class="container">
    <table class="table">
    <thead>
        <tr class="text-center" >
        <th scope="col" style="width:10%;">ID Produk</th>
        <th scope="col" style="width:10%;">Gambar</th>
        <th scope="col" style="width:40%;">Nama</th>
        <th scope="col" style="width:10%;">Tersedia</th>
        <th scope="col" style="width:30%;">Handle</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $barang)
            <tr class="text-center">
                <td>{{ $barang->id }}</td>
                <td class="w-25"><img src="{{ asset('gambar/produk/'.$barang->gambar_1) }}" alt="" style="width:20%;height:auto;"></td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->stok }}</td>
                <td>
                    <a class="mx-2" href="{{ route('admin.lihat_barang', $barang->id) }}"><i class="far fa-eye" style="color:blue;"></i></a>
                    <a class="mx-2" href="{{ route('admin.edit_barang', $barang->id) }}"><i class="fas fa-pen" style="color:orange;"></i></a>
                    <a class="mx-2" href="{{ route('admin.hapus_barang', $barang->id) }}" onclick="return confirm('apakah anda yakin ingin menghapus data ini?');"><i class="fas fa-trash" style="color:red;"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection