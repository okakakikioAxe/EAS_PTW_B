@extends('layouts.admin')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">
@endsection

@section('title','admin | fesien')

@section('konten')
<div class="container">
    <h3 class="text-center">DAFTAR PRODUK</h3>
    <a class="btn btn-primary float-end" href="#" role="button">Tambah +</a>
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
                <td>@mdo</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection