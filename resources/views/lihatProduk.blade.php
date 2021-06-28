@extends('layouts.admin')

@section('title','detail produk')

@section('konten')
    <div class="container">
    <h4 class="text-center">DETAIL PRODUK</h4>
    <br>
        @foreach ($barang as $b)
            
        
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">ID PRODUK</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $b->id}}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">NAMA BARANG</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $b->nama_barang }}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">HARGA</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $b->harga }}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">RATING</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $b->rating }}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">KATEGORI</p>
            </div>
            <div class="col">
                <p class="text-center">1</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">TERJUAL</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $b->terjual }}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">PENILAIAN</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $b->penilaian }}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">STOK</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $b->stok }}</p>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">MERK</p>
            </div>
            <div class="col">
                <p class="text-center">{{ $b->merk }}</p>
            </div>
            <div class="col"></div>
        </div>
        @endforeach
        <br>
        <br>
        <div class="row">
            <div class="col text-center">
                <a href="{{ route('admin.produk') }}" role="button" class="btn btn-primary w-25">OK</a>
            </div>
        </div>
        
    </div>
    
@endsection